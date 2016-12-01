<?php
require_once "php/controller.php";
   
/**
 * Entité gérant l'ensemble des intéraction de l'utilisateur avec son profil
 */
class Mon_panier extends Controller {
    
    /**
    * Permet de vider le panier de l'utilisateur
    */   
    function empty_basket() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            unset($_SESSION['produit']);
            $_SESSION['produit'] = array();
            $_SESSION['nbproduits'] = 0;
            
            $this->print_basket();
        }
    }
    
    /**
    * Permet d'acheter le contenu du panier
    */
    function buy_basket() {
        if (isset($_SESSION['id'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                
                if($_SESSION['nbproduits'] > 0){
                    
                    $list_id = array();
        
                    foreach($_SESSION['produit'] as $item){
                        array_push($list_id, $item['id']);
                    }
                    
                    $query = WorkQuery::create();
                    $result = $query
                        ->filterById($list_id)
                        ->find();
                    
                    foreach($result as $key => $item){
                        foreach($_SESSION['produit'] as $session_item){
                            if($session_item['id'] == $item->getId()) {
                                if (($item->getStock()-$session_item['quantity']) >= 0){
                                    $item->setStock($item->getStock()-$session_item['quantity']);
                                    $item->save();
                                } else {
                                    $_SESSION['alerttype'] = "danger";
                                    $_SESSION['alerttext'] = "Le produit : ".$item.getTitle()." n'est plus disponible en quantité suffisante.";
                                    $this->smarty->display("acceuil.tpl");
                                    unset($_SESSION['alerttype']);
                        		    unset($_SESSION['alerttext']);
                        		    exit;
                                }
                            }
                        }
                    }
                    
                    /**use \Psr\Http\Message\ServerRequestInterface as Request;
                    use \Psr\Http\Message\ResponseInterface as Response;
                    
                    require 'vendor/autoload.php';
                    
                    $app = new \Slim\App;
                    
                    $app->post('/pay', function(Request $request, Response $response) {
                        $id = $_SESSION['id'];
                        $body = $request->getParsedBody();
                        $email = $_SESSION['email'];
                        $amount = $_SESSION['price'];
                        $currency = $body['currency'];
                        $date = new DateTime();
                        
                        return $trans_number;*/
                        
                        $trans_number = $_SESSION['id'].time().uniqid(mt_rand(),true);
                    
                    /*});
                    
                    $app->run();*/
                    
                    
                    
                    $history = new History();
                    $history->setTotalPrice($_SESSION['price']);
                    $history->setNbWork($_SESSION[nbproduits]);
                    $history->setDatePayement(new DateTime());
                    $history->setUserId($_SESSION['id']);
                    $history->setWorkId($trans_number);
                    
                    $history->save();
                
                    
                    
                    
                    
                    unset($_SESSION['produit']);
                    unset($_SESSION['price']);
                    $_SESSION['produit'] = array();
                    $_SESSION['nbproduits'] = 0;
                    
                    $_SESSION['alerttype'] = "success";
                    $_SESSION['alerttext'] = "Votre achat a bel et bien été éffectué. Merci de votre confiance, vous recevrez vos oeuvres dans les prochains jours.
                                            N° transaction : ".$trans_number;
                    $this->smarty->display("accueil.tpl");
                    unset($_SESSION['alerttype']);
		            unset($_SESSION['alerttext']);
                } else {
                    $this->print_basket();
                }
                
            } else {
                $this->print_basket();
            }
            
        } else {
            $_SESSION['alerttype'] = "warning";
            $_SESSION['alerttext'] = "Veuillez vous connecter ou vous inscrire pour pouvoir procéder au paiement.";
            $this->smarty->display("connexion.tpl");
            unset($_SESSION['alerttype']);
		    unset($_SESSION['alerttext']);
        }
    }
    
    /**
    * Permet d'éditer la quantité d'un article dans le panier
    */
    function edit_quantity() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if(isset($_GET['id_produit']) && isset($_GET['quantity'])){
                foreach($_SESSION['produit'] as $key => $session_item){
                    if($session_item['id'] == $_GET['id_produit']) {
                        $_SESSION['nbproduits'] -= $session_item['quantity'];
                        $_SESSION['nbproduits'] += $_GET['quantity'];
                        $_SESSION['produit'][$key]['quantity'] = $_GET['quantity'];
                    }
                }
            }
            $this->print_basket();
        }
    }
    
    /**
    * Permet de supprimer un article du panier
    */
    function delete_product() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if(isset($_GET['id_produit'])){
                foreach($_SESSION['produit'] as $key => $session_item){
                    if($session_item['id'] == $_GET['id_produit']) {
                        $_SESSION['nbproduits'] -= $session_item['quantity'];
                        unset($_SESSION['produit'][$key]);
                    }
                }
            }
            $this->print_basket();
        }
    }
    
    /**
    * Permet d'afficher le panier
    */    
    function print_basket() {
        $list_id = array();
        
        foreach($_SESSION['produit'] as $item){
            array_push($list_id, $item['id']);
        }
        
        if(count($list_id) > 0){
            $query = WorkQuery::create();
            $result = $query
                ->filterById($list_id)
                ->join('Artist')
                ->find()->toArray();
            $this->smarty->assign("works",$result);
            
            $total_price = 0;
            
            foreach($result as $key => $item){
                foreach($_SESSION['produit'] as $session_item){
                    if($session_item['id'] == $item['Id']) {
                        $result[$key]['Quantity'] = $session_item['quantity'];
                        $total_price += $item['Price'] * $session_item['quantity'];
                    }
                }
            }
            
            $_SESSION['price'] = $total_price;
            
            $this->smarty->assign("total_price",$total_price);
        } 
        
        $this->smarty->display("mon_panier.tpl");
    }
    
}
?>