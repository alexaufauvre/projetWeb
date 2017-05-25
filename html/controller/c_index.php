<?php

require_once('html/model/m_compose.php');


$composemodel = new ComposeModel();
$menuLittleItaly = $composemodel->getMenuRestaurant('Little Italy');
$menuLxtra = $composemodel->getMenuRestaurant('L\'(x)tra');
$menuPastaria = $composemodel->getMenuRestaurant('Pastaria');
$menuCuisineDuMonde = $composemodel->getMenuRestaurant('Cuisine du Monde');
$menuRotisserie = $composemodel->getMenuRestaurant('Rôtisserie');
$menuSaveursDeLaMer = $composemodel->getMenuRestaurant('Saveurs de la Mer');
$menuEntreesChaudes = $composemodel->getMenuRestaurant('Entrées Chaudes');
$menuGrill = $composemodel->getMenuRestaurant('Grill');
$menuPlatsDesRegions = $composemodel->getMenuRestaurant('Plats des Régions');
// var_dump($menu);



include_once('html/view/v_index.php');

 ?>
