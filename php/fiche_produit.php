<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_produit'])) {
        $query = WorkQuery::create();
        $result = $query
            ->filterById($_GET['id_produit'])
            ->find()->toArray();
            
        if (count($result) != 0) {
            $work = $result[0];
            
            $query = ArtistQuery::create();
            $result = $query
                ->filterById($work['ArtistId'])
                ->find()->toArray();
                
            $smarty->assign("work",$work);
            $smarty->assign("artist",$result[0]);
            $smarty->display("fiche_produit.tpl");
        } else {
            $_SESSION['alerttype'] = "warning";
            $_SESSION['alerttext'] = "Le produit que vous cherchez n'existe pas ou n'est plus disponible.";
            $smarty->display("accueil.tpl");
            unset($_SESSION['alerttype']);
    		unset($_SESSION['alerttext']);
        }
        
    } else {
        $_SESSION['alerttype'] = "warning";
        $_SESSION['alerttext'] = "Veuillez selectionner une oeuvre pour la voir en détail.";
        $smarty->display("accueil.tpl");
        unset($_SESSION['alerttype']);
		unset($_SESSION['alerttext']);
    }
?>