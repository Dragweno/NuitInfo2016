<?php
    if (isset($_SESSION['id'])) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $query = HistoryQuery::create();
            $result = $query
                ->filterByUserId($_SESSION['id'])
                ->find()->toArray();
            $smarty->assign("history", $result);
            
            $smarty->display("commandes.tpl");
        }
    } else {
        $_SESSION['alerttype'] = "warning";
        $_SESSION['alerttext'] = "Veuillez-vous connecter pour modifier accèder à cette page.";
        $this->smarty->display("accueil.tpl");
        unset($_SESSION['alerttype']);
		unset($_SESSION['alerttext']);
    }

?>