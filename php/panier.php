<?php
	
	json();
	
	function json() {
		if (isset ($_GET["id_produit"]) && isset($_GET["quantity"])) {
			
			$query = WorkQuery::create();
	        $result = $query
	            ->filterById($_GET['id_produit'])
	            ->findOne();
	            
	        if($result != null){
	        	$new = array('id' => $result->getId(), 'title' => $result->getTitle(), 'quantity' => $_GET["quantity"]);
	        	
	        	if (!isset($_SESSION["produit"]) && !isset($_SESSION["nbproduits"])) {
					$_SESSION["produit"] = array ();
					$_SESSION["nbproduits"] = 0;
				}
	        	
	        	foreach($_SESSION['produit'] as $item) {
	        		if (in_array( $_GET["id_produit"], $item)){
	        			echo -1;
	        			exit;
	        		}
	        	}
	        	
	        	$array = $_SESSION['produit'];
	        	array_push($array, $new);
	        	$_SESSION['produit'] = $array;
	        	$_SESSION['nbproduits'] += $_GET["quantity"];
	        }
	        
	        echo json_encode($_SESSION['nbproduits']);
		} else {
			echo -2;
		}
	}
	
?>
