<?php
//Controlleur pour les données envoyées par le formulaire d'édition de menu

require_once('../model/m_compose.php');
require_once('../model/m_dish.php');
require_once('../model/m_datemenu.php');


$dishmodel = new DishModel();
$composemodel = new ComposeModel();
$datemenumodel = new DateMenuModel();

//On récupère les valeurs du formulaire
$actionadd=$_POST["submitadd"];
$actiondel=$_POST["submitdel"];

$date = $_POST["Date"];

$restaurant = $_POST["Restaurant"];

//On convertis les noms de plats en leur ID
$dish1 = $dishmodel->getIdDish($_POST["Dish1"]);
$dish1 = $dish1["id_dish"];

$dish2 = $dishmodel->getIdDish($_POST["Dish2"]);
$dish2 = $dish2["id_dish"];

$dish3 = $dishmodel->getIdDish($_POST["Dish3"]);
$dish3 = $dish3["id_dish"];


//Modification dans la base de données


if ($actionadd=="Ajouter menu")
  {

      $datemenumodel->setDate($date); //On rajoute la date dans la table date_menu si elle n'y est pas déjà

      if ($dish1 != 'Sélectionner le Plat' && $restaurant != 'Sélectionner le Restaurant' && isset($date)) //Si le plat, le restaurant et la date sont valides
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


include_once('../view/v_validation.php');

 ?>
