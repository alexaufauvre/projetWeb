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
        <h1 class="TitreAccueil">Connexion admin</h1>

        <p>

          <form class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <!-- <button type="submit" class="btn btn-default">Submit</button> // Vrai submit -->
      <button type="button" class="btn btn-warning"><a href="../view/v_ajoutMenu.php">Submit</a></button>
    </div>
  </div>
</form>
</p>

<p><button type="button" class="btn btn-warning"><a href="../index.php">Retour</a></button>
</p>


        <p>
  <?php
/*$restaurant = "Pastaria";
echo 'Le menu de ' .$restaurant. ' est :';*/
?>
        </p>
    </body>


</html>
