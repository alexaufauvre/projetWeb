<!DOCTYPE html>
<html>
    <head>
        <title>RU Hungry</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../style.css">

    </head>
    <body>
        <h1 class="HomeTitle">Ajouter un menu</h1>
        <?php  //var_dump($listRestaurant); ?>

        <p>
          <form action="../controller/c_validation.php" method="post">
          <div class="form-group">
  <label for="selRestaurant">Restaurant</label>
  <select name="Restaurant" class="form-control" id="selRestaurant">
    <option value="Sélectionner le Restaurant" selected="selected">Sélectionner le Restaurant</option>
    <option value="Entrées Chaudes">Entrées Chaudes</option>
    <option value="Cuisine du Monde">Cuisine du Monde</option>
    <option value="Rôtisserie">Rôtisserie</option>
    <option value="Saveurs de la Mer">Saveurs de la Mer</option>
    <option value="Pastaria">Pastaria</option>
    <option value="Plats des Régions">Plats des Régions</option>
    <option value="Grill">Grill</option>
    <option value="Little Italy">Little Italy</option>
    <option value="L'(x)tra">L'(x)tra</option>
  </select>
<br>


<!-- <select name="owner">
<?php
/*$sql = mysqli_query($connection, "SELECT username FROM users");
while ($row = $sql->fetch_assoc()){
echo "<option value=\"owner1\">" . $row['username'] . "</option>";
}*/

?>
</select> -->



<label for="selDish1">Plat 1</label>
<select name="Dish1" class="form-control" id="selDish1">

  <option value="Sélectionner le Plat" selected="selected">Sélectionner le Plat</option>
  <option value="Kebab">Kebab</option>
  <option value="Frites">Frites</option>
  <option value="Haricots Plats">Haricots Plats</option>
  <option value="Feuilleté de Chèvre">Feuilleté de Chèvre</option>
</select>
  <?php

  // foreach($ListRestaurant as $element)
  //     {
  //         echo "<option value=\"ID_restaurant\">" . $element['ID_restaurant'] . "</option>";
  //       } ?>


<br>
<label for="selDish2">Plat 2</label>
<select name="Dish2" class="form-control" id="selDish2">

  <option value="Sélectionner le Plat" selected="selected">Sélectionner le Plat</option>
  <option value="Kebab">Kebab</option>
  <option value="Frites">Frites</option>
  <option value="Haricots Plats">Haricots Plats</option>
  <option value="Feuilleté de Chèvre">Feuilleté de Chèvre</option>
</select>

<br>

<label for="selDish3">Plat 3</label>
<select name="Dish3" class="form-control" id="selDish3">

  <option value="Sélectionner le Plat" selected="selected">Sélectionner le Plat</option>
  <option value="Kebab">Kebab</option>
  <option value="Frites">Frites</option>
  <option value="Haricots Plats">Haricots Plats</option>
  <option value="Feuilleté de Chèvre">Feuilleté de Chèvre</option></select>

<br>

<label for="selDate">Date</label>
<input type="date" name="Date" class="form-control" id="selDate">
</input>
<input type="submit" name="submit" value="Ajouter menu" id="inputAdd"/>
<input type="submit" name="submit" value="Supprimer menu" id="inputDel"/>
</div>
</form>


<p><button type="button" class="btn btn-warning"> <a href="../../index.php">Retour</a></button>
</p>

    </body>


</html>
