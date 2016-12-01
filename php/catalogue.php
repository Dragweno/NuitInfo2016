<?php

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['category'])) {
        
        if(isset($_GET['pagenumber'])){
            $pagenumber = $_GET['pagenumber'];
        } else {
            $pagenumber = 1;
        }
        
        $query = CategoryQuery::create();
        $result = $query
            ->filterByName($_GET['category'])
            ->find()->toArray();
        $category = $result[0];
        
        if (count($result) != 0){
            $smarty->assign("category", $category);
            
            // trouver les oeuvres les plus recente respectant la catégorie
            $query = WorkQuery::create();
            $result = $query
                ->filterByCategoryId($category['Id'])
                ->orderByDatePost('desc')
                ->limit(5)
                ->find()->toArray();
            $smarty->assign("recentworks",$result);
            
            // trouver toutes les oeuvres respectant la catégorie
            $query = WorkQuery::create();
            $result = $query
                ->filterByCategoryId($category['Id'])
                ->limit(9)
                ->offset(($pagenumber-1)*9)
                ->find()->toArray();
            $smarty->assign("works",$result);
            
            //trouver le nombre d'oeuvre par catégorie pour gerer le nb de pages
            $query = WorkQuery::create();
            $result = $query
                ->filterByCategoryId($category['Id'])
                ->paginate($page = 1, $maxPerPage = 9);
            $smarty->assign("nbPages", $result->getLastPage());
            
            if($pagenumber > $result->getLastPage()){
            errorPage($smarty);
    		exit();
        }
            
            $smarty->display("catalogue.tpl");
        } else {
            $_SESSION['alerttype'] = "warning";
            $_SESSION['alerttext'] = "La catégorie que vous cherchez n'existe pas ou n'est plus disponible.";
            $smarty->display("accueil.tpl");
            unset($_SESSION['alerttype']);
    		unset($_SESSION['alerttext']);
        }
        
    } else if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['search'])) {
        if(isset($_GET['pagenumber'])){
            $pagenumber = $_GET['pagenumber'];
        } else {
            $pagenumber = 1;
        }
        
        $query = WorkQuery::create();
        $result = $query
            ->orderByDatePost('desc')
            ->limit(5)
            ->find()->toArray();
        $smarty->assign("recentworks",$result);
            
                
        //trouver le nombre d'oeuvre par catégory dans le Search pour gerer le nb de pages
        $query = WorkQuery::create();
        $result = $query
            ->filterByTitle('*' . $_GET['search'] . '*')
            ->paginate($page = 1, $maxPerPage = 9);
        
        if($pagenumber > $result->getLastPage()){
            errorPage($smarty);
    		exit();
        }
        
        $smarty->assign("nbPages", $result->getLastPage());
            
        $query = WorkQuery::create();
        $result = $query
            ->filterByTitle('*' . $_GET['search'] . '*')
            ->orderByDatePost('desc')
            ->limit(9)
            ->offset(($pagenumber-1)*9)
            ->find()->toArray();
            
        if (count($result) != 0){
            $smarty->assign("works",$result);
            $smarty->display("catalogue.tpl");
        } else {
            $_SESSION['alerttype'] = "warning";
            $_SESSION['alerttext'] = "Il n'existe aucune oeuvre correspondant à votre recherche.";
            $smarty->display("accueil.tpl");
            unset($_SESSION['alerttype']);
    		unset($_SESSION['alerttext']);
        }
        
    } else {
        if(isset($_GET['pagenumber'])){
            $pagenumber = $_GET['pagenumber'];
        } else {
            $pagenumber = 1;
        }
        
        $query = WorkQuery::create();
        $result = $query
            ->orderByDatePost('desc')
            ->limit(5)
            ->find()->toArray();
        $smarty->assign("recentworks",$result);
        
        // trouver toutes les oeuvres respectant la catégorie
        $query = WorkQuery::create();
        $result = $query
            ->limit(9)
            ->offset(($pagenumber-1)*9)
            ->find()->toArray();
        $smarty->assign("works",$result);
        
        //trouver le nombre d'oeuvre pour gerer le nb de pages
        $query = WorkQuery::create();
        $result = $query
            ->paginate($page = 1, $maxPerPage = 9);
        $smarty->assign("nbPages", $result->getLastPage());
        
        $smarty->display("catalogue.tpl");
    }
  
    function errorPage($smarty){
        $_SESSION['alerttype'] = "warning";
        $_SESSION['alerttext'] = "La page demandée n'éxiste pas.";
        $smarty->display("accueil.tpl");
        unset($_SESSION['alerttype']);
		unset($_SESSION['alerttext']);
    }
        
?>
