<?php
require_once "php/controller.php";

/**
 * Entité gérant l'ensemble des intéraction de l'utilisateur avec son profil
 */
class Profil extends Controller {
    
    /**
     * Permet l'enregistrement d'une nouvelle personne sur le site et 
     * l'affichage du formulaire d'inscription si celui ci n'y a pas encore répondu
     */
    function signin() {
        if (!isset($_SESSION['id'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST["input_register_name"])
                    && isset($_POST["input_register_firstname"])
                    && isset($_POST["input_register_address"])
                    && isset($_POST["input_register_postalcode"])
                    && isset($_POST["input_register_city"])
                    && isset($_POST["input_register_civility"])
                    && isset($_POST["input_register_email"])
                    && isset($_POST["input_register_password"])) {
                    
                    $name = $_POST["input_register_name"];
                    $firstname = $_POST["input_register_firstname"];
                    $address = $_POST["input_register_address"];
                    $postal_code = $_POST["input_register_postalcode"];
                    $city = $_POST["input_register_city"];
                    $civility = $_POST["input_register_civility"];
                    $email = $_POST["input_register_email"];
                    $password = md5($_POST["input_register_password"]);
                    $date_joined = new DateTime();
                    $date_updated = new DateTime();
                    $date_lastlog = new DateTime();
                    
                    $query = UserQuery::create();
                    $result = $query
                        ->where('User.email = ?', $email) 
                        ->find()->toArray();
                    
                    if (count($result) == 0) {
                        $user = new User();
                        $user->setName($name);
                        $user->setFirstname($firstname);
                        $user->setAddress($address);
                        $user->setPostalCode($postal_code);
                        $user->setCity($city);
                        $user->setCivility($civility);
                        $user->setEmail($email);
                        $user->setPassword($password);
                        $user->setDateJoined($date_joined);
                        $user->setDateLastlog($date_lastlog);
                        $user->setDateUpdate($date_updated);
                        
                        if ($user->save()) {
                            $_SESSION['id'] = $user->getId();
                            $_SESSION['email'] = $user->getEmail();
                            $_SESSION['name'] = $user->getName();
                            $_SESSION['firstname'] = $user->getFirstname();
                            
                            $_SESSION['alerttype'] = "success";
                            $_SESSION['alerttext'] = "Vous vous-êtes inscrit avec succes sur TalentSharer. Voici un petit récapitulatif des données saisies:";
                            $this->smarty->display("confirmation_inscription.tpl");
                            unset($_SESSION['alerttype']);
		                    unset($_SESSION['alerttext']);
		                    
                        } else {
                            $_SESSION['alerttype'] = "danger";
                            $_SESSION['alerttext'] = "Nous n'avons pas réussi à vous enregistrer. Les information transmises sont peut-être érronées.";
                            $this->smarty->display("inscription.tpl");
                            unset($_SESSION['alerttype']);
		                    unset($_SESSION['alerttext']);
                        }
                        
                    } else {
                        $_SESSION['alerttype'] = "warning";
                        $_SESSION['alerttext'] = "Il existe déjà un utilisateur utilisant cette adresse mail.";
                        $this->smarty->display("inscription.tpl");
                        unset($_SESSION['alerttype']);
		                unset($_SESSION['alerttext']);
                    }
                    
                } else {
                    $_SESSION['alerttype'] = "danger";
                    $_SESSION['alerttext'] = "Veuillez transmettre l'ensemble des informations.";
                    $this->smarty->display("inscription.tpl");
                    unset($_SESSION['alerttype']);
	            	unset($_SESSION['alerttext']);
                }
                
            } else {
                $this->smarty->display("inscription.tpl");
            }
            
        } else {
            $_SESSION['alerttype'] = "warning";
            $_SESSION['alerttext'] = "Etes-vous adepte de la récursivité ?";
            $this->smarty->display("accueil.tpl");
            unset($_SESSION['alerttype']);
		    unset($_SESSION['alerttext']);
        }
        
    }
    
    /**
     * Permet la connexion d'une personne au site et
     * l'affichage du formulaire d'authentification si celui ci n'est pas connecté 
     */
    function signup() {
        if (!isset($_SESSION['id'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['input_connexion_email']) && isset($_POST['input_connexion_password'])) {
                    
                    $login = $_POST['input_connexion_email'];
                    $password = md5($_POST['input_connexion_password']);
                    
                    $query = UserQuery::create();
                    $user = $query
                        ->filterByEmail($login)
                        ->filterByPassword($password)
                        ->findOne();
            
                    if($user != null) {
                        $user->setDateLastLog(new DateTime);
                        
                        $_SESSION['id'] = $user->getId();
                        $_SESSION['email'] = $user->getEmail();
                        $_SESSION['name'] = $user->getName();
                        $_SESSION['firstname'] = $user->getFirstname();
                        $_SESSION['alerttype'] = "success";
                        $_SESSION['alerttext'] = "Bon retour sur TalentSharer.";
                        
                        $this->smarty->display("accueil.tpl");
                        unset($_SESSION['alerttype']);
		                unset($_SESSION['alerttext']);
                    } else {
                        $_SESSION['alerttype'] = "danger";
                        $_SESSION['alerttext'] = "Les informations rentrées ne correspondent à aucun compte.";
                        $this->smarty->display("connexion.tpl");
                        unset($_SESSION['alerttype']);
		                unset($_SESSION['alerttext']);
                    }
                    
                } else {
                    $_SESSION['alerttype'] = "warning";
                    $_SESSION['alerttext'] = "Veuillez rentrer un identifiant et un mot de passe dans les champs indiqués.";
            	    $this->smarty->display("connexion.tpl");
            	    unset($_SESSION['alerttype']);
		            unset($_SESSION['alerttext']);
                }
                
            } else {
            	$this->smarty->display("connexion.tpl");
            }
            
        } else {
            $_SESSION['alerttype'] = "warning";
            $_SESSION['alerttext'] = "Etes-vous adepte de la récursivité ?";
            $this->smarty->display("accueil.tpl");
            unset($_SESSION['alerttype']);
		    unset($_SESSION['alerttext']);
        }
    }
    
    /**
     * Permet d'enregistrer les modifications que veut l'utilisateur sur son propre profil et
     * affiche le formulaire pré-rempli si celui-ci n'a pas encore envoyé de modification.
     */
    function edit_profil() {
        if (isset($_SESSION['id'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST["input_edit_name"])
                    && isset($_POST["input_edit_firstname"])
                    && isset($_POST["input_edit_address"])
                    && isset($_POST["input_edit_postalcode"])
                    && isset($_POST["input_edit_city"])
                    && isset($_POST["input_edit_civility"])
                    && isset($_POST["input_edit_email"])) {
                    
                    $name = $_POST["input_edit_name"];
                    $firstname = $_POST["input_edit_firstname"];
                    $address = $_POST["input_edit_address"];
                    $postal_code = $_POST["input_edit_postalcode"];
                    $city = $_POST["input_edit_city"];
                    $civility = $_POST["input_edit_civility"];
                    $email = $_POST["input_edit_email"];
                    $date_updated = new DateTime();
                    
                    $query = UserQuery::create();
                    $user = $query
                        ->filterByEmail($_SESSION['email'])
                        ->findOne();

                    if(isset($_POST["input_edit_old_password"])
                        && isset($_POST["input_edit_password"])
                        && isset($_POST["input_edit_passwordconfirm"])){
                        
                        if (md5($_POST["input_edit_old_password"]) == $user->getPassword()){
                            if ($_POST["input_edit_password"] == $_POST["input_edit_passwordconfirm"]) {
                                $user->setPassword(md5($_POST["input_edit_password"]));
                            } else {
                                $_SESSION['alerttype'] = "danger";
                                $_SESSION['alerttext'] = "Nous avons sauvegardé les informations personnelles mais les deux nouveaux mots de passe ne correspondent pas.";
                            }
                        } else {
                            $_SESSION['alerttype'] = "danger";
                            $_SESSION['alerttext'] = "Nous avons sauvegardé les informations personnelles mais l'ancien mot de passe ne correspond pas.";
                        }
                    }
                    
                    $user->setName($name);
                    $user->setFirstname($firstname);
                    $user->setAddress($address);
                    $user->setPostalCode($postal_code);
                    $user->setCity($city);
                    $user->setCivility($civility);
                    $user->setEmail($email);
                    $user->setDateUpdate($date_updated);
                    
                    $user->save();
                    
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $name;
                    $_SESSION['firstname'] = $firstname;
                    
                    $_SESSION['alerttype'] = "success";
                    $_SESSION['alerttext'] = "L'ensemble des modifications ont bien été enregistrées.";
                    $this->smarty->display("accueil.tpl");
                    unset($_SESSION['alerttype']);
		            unset($_SESSION['alerttext']);
                    
                } else {
                    $_SESSION['alerttype'] = "danger";
                    $_SESSION['alerttext'] = "Veuillez transmettre l'ensemble des informations.";
                    $this->smarty->display("modifier_profil.tpl");
                    unset($_SESSION['alerttype']);
		            unset($_SESSION['alerttext']);
                }
                
            } else {
                $query = UserQuery::create();
                $result = $query
                    ->filterByEmail($_SESSION['email'])
                    ->find()->toArray();
                $user = $result[0];
                
                $this->smarty->assign("user", $user);
                $this->smarty->display("modifier_profil.tpl");
            }
            
        } else {
            $_SESSION['alerttype'] = "warning";
            $_SESSION['alerttext'] = "Veuillez-vous connecter pour modifier votre profil.";
            $this->smarty->display("accueil.tpl");
            unset($_SESSION['alerttype']);
		    unset($_SESSION['alerttext']);
        }
    }
    
    /**
     * Permet la deconnexion de l'utilisateur
     */
    function signout() {
        if (isset($_SESSION['id'])) {
            session_unset();
            session_destroy();
        }
        $_SESSION['alerttype'] = "info";
        $_SESSION['alerttext'] = "Aurevoir, nous esperons vous revoir très bientôt.";
        $this->smarty->display("accueil.tpl");
        unset($_SESSION['alerttype']);
		unset($_SESSION['alerttext']);
    }
    
}

?>