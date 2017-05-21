
<?php
	if(!isset($_GET['section']) || $_GET['section']=='index'){
		include_once('html/view/v_index.php');
	}
	else if($_GET['section']=='menuSemaine'){
		include_once('html/view/v_menuSemaine.php');
	}
	else if($_GET['section']=='infoMenu'){
		include_once('html/view/v_infoMenu.php');
	}
  else if($_GET['section']=='connexion'){
		include_once('html/view/v_connexion.php');
	}
  else if($_GET['section']=='ajoutMenu'){
		include_once('html/view/v_ajoutMenu.php');
	}
?>


<!-- A changer avec les controllers -->
<?php /*
	if(!isset($_GET['section']) || $_GET['section']=='index'){
		include_once('controleur/c_index.php');
	}
	else if($_GET['section']=='menuSemaine'){
		include_once('controleur/c_menuSemaine.php');
	}
	else if($_GET['section']=='infoMenu'){
		include_once('controleur/c_infoMenu.php');
	}
  else if($_GET['section']=='connexion'){
		include_once('controleur/c_connexion.php');
	}
  else if($_GET['section']=='ajoutMenu'){
		include_once('controleur/c_ajoutMenu.php');
	} */
?>
