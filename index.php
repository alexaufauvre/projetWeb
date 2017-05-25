<?php
	if(!isset($_GET['section']) || $_GET['section']=='index'){
		include_once('html/controller/c_index.php');
	}
	else if($_GET['section']=='menuSemaine'){
		include_once('html/controller/c_menuSemaine.php');
	}
	else if($_GET['section']=='infoMenu'){
		include_once('html/controller/c_infoMenu.php');
	}
  else if($_GET['section']=='connexion'){
		include_once('html/controller/c_connexion.php');
	}
  else if($_GET['section']=='ajoutMenu'){
		include_once('html/controller/c_ajoutMenu.php');
	}
?>
