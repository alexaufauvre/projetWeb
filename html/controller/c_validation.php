<?php

require_once('../model/m_compose.php');
require_once('../model/m_dish.php');
require_once('../model/m_datemenu.php');


$dishmodel = new DishModel();
$composemodel = new ComposeModel();
$datemenumodel = new DateMenuModel();

$actionadd=$_POST["submitadd"];
$actiondel=$_POST["submitdel"];
// echo $actionadd;
// echo $actiondel;
$date = $_POST["Date"];

$restaurant = $_POST["Restaurant"];


$dish1 = $dishmodel->getIdDish($_POST["Dish1"]);
// var_dump($dish1);
$dish1 = $dish1["id_dish"];

$dish2 = $dishmodel->getIdDish($_POST["Dish2"]);
// var_dump($dish2);
$dish2 = $dish2["id_dish"];

$dish3 = $dishmodel->getIdDish($_POST["Dish3"]);
// var_dump($dish3);
$dish3 = $dish3["id_dish"];

// echo $date;
// echo $restaurant;
// echo $dish1;
// echo $dish2;
// echo $dish3;



if ($actionadd=="Ajouter menu")
  {

      $datemenumodel->setDate($date);

      if ($dish1 != 'Sélectionner le Plat' && $restaurant != 'Sélectionner le Restaurant' && isset($date))
      {
        $composemodel->setMenu($date,$restaurant,$dish1);

      }
      if ($dish2 != 'Sélectionner le Plat' && $restaurant != 'Sélectionner le Restaurant' && isset($date))
      {
        $composemodel->setMenu($date,$restaurant,$dish2);
      }

      if ($dish3 != 'Sélectionner le Plat' && $restaurant != 'Sélectionner le Restaurant' && isset($date))
      {
        $composemodel->setMenu($date,$restaurant,$dish3);
      }

  }

  if ($actiondel=="Supprimer menu")
    {

        if ($dish1 != 'Sélectionner le Plat' && $restaurant != 'Sélectionner le Restaurant' && isset($date))
        {
          $composemodel->deleteMenu($date,$restaurant,$dish1);

        }
        if ($dish2 != 'Sélectionner le Plat' && $restaurant != 'Sélectionner le Restaurant' && isset($date))
        {
          $composemodel->deleteMenu($date,$restaurant,$dish2);
        }

        if ($dish3 != 'Sélectionner le Plat' && $restaurant != 'Sélectionner le Restaurant' && isset($date))
        {
          $composemodel->deleteMenu($date,$restaurant,$dish3);
        }

    }

// var_dump($menu);

include_once('../view/v_validation.php');

 ?>
