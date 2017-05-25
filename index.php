<?php
	if(!isset($_GET['section']) || $_GET['section']=='index'){
		include_once('html/controller/c_index.php');
	}
	else if($_GET['section']=='weekMenu'){
		include_once('html/controller/c_weekMenu.php');
	}
	else if($_GET['section']=='infoMenu'){
		include_once('html/controller/c_infoMenu.php');
	}
  else if($_GET['section']=='connection'){
		include_once('html/controller/c_connection.php');
	}
  else if($_GET['section']=='addMenu'){
		include_once('html/controller/c_addMenu.php');
	}
	else if($_GET['section']=='validation'){
		include_once('html/controller/c_validation.php');
	}
?>
