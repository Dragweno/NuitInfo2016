<?php
	
	$idClient = $_GET ["idClient"];
	$mt = $_GET ["mt"];

	$url = "http://localhost/met02/rest.php/transaction/$idClient/$mt";
	$data = "DATA envoyée au serveur";
	$opts = array(
		'http'=>array(
			'method'=>"GET",
			'header'=>"User-Agent:Client RestFul\r\n",
			'header'=>"Content-Type: multipart/form-data\r\n",
			"Content-length: " . strlen($data)."\r\n",
			'content'=>$data));
	$context = stream_context_create($opts);
	$fp = fopen($url, 'r', false, $context);
	$buffer = fread($fp, 2048);
	$smarty->assign ("client",$idClient);
	$smarty->assign ("montant",$mt);
	$smarty->assign ("trans",$buffer);
	$smarty->display("$page.tpl"); 