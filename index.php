<?php
	//VARIABLE SESSION
	session_start();
	if (!$_SESSION ["produit"] && !$_SESSION ["nbproduits"]) {
		$_SESSION ["produit"] = array ();
		$_SESSION ["nbproduits"] = 0;
	}
	
	// LIBS
	require 'vendor/autoload.php';

	// SMARTY
	$smarty = new Smarty ();
	
	$smarty->template_dir = 'templates/';
	$smarty->compile_dir = 'templates_c/';
	$smarty->config_dir = 'configs/';
	$smarty->cache_dir = 'cache/';

	// PROPEL
	Propel::init ("build/conf/librairie-conf.php");
	set_include_path (__DIR__. "/build/classes" . PATH_SEPARATOR . get_include_path ());
	
	// FRONT CONTROLEUR	
	if (isset ($_GET ['page'])) $page = $_GET ['page']; else $page = "accueil";
	if (isset ($_GET ['action'])) $action = $_GET ['action']; else $action = "";
	
	if ($page == "accueil") {
		if (isset ($_POST ['page'])) $page = $_POST ['page']; else $page = "accueil";
		if (isset ($_POST ['action'])) $action = $_POST ['action']; else $action = "";
	}
		
	switch ($page) {
		case "accueil" :
			require("php/accueil.php");
			break;
		case "profil" :
			require("php/profil.php");
			break;
		case "inscription" :
			require("php/profil.php");
			$page = "profil";
			$action = "signin";
			break;
		case "modifier_profil" :
			require("php/profil.php");
			$page = "profil";
			$action = "edit_profil";
			break;
		case "catalogue" :
			require("php/catalogue.php");
			break;
		case "fiche_produit" :
			require("php/fiche_produit.php");
			break;
		case "mon_panier" :
			require("php/mon_panier.php");
			break;
		case "commandes" :
			require("php/commandes.php");
			break;
		case "panier" :
			require("php/panier.php");
			break;
		default:
	    	require("php/accueil.php");
			break;
	}
	
	if ($action != ""){
		$class = ucfirst($page);
		$controller = new $class();
		$controller->$action();
	}
	
	
	