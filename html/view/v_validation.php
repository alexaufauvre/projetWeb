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
        <h1 class="HomeTitle">Validation menu</h1>

        <p>
          <br>
          <?php
          if ($actionadd=="Ajouter menu")
            {
        echo 'Menu ajouté !';
          }

          if ($actiondel=="Supprimer menu")
            {
        echo 'Menu supprimé !';
          }
        ?>
        <br>
        </p>

<button type="button" class="btn btn-warning"> <a href="../../index.php">Retour accueil</a></button>
<button type="button" class="btn btn-warning"> <a href="../controller/c_editMenu.php">Revenir à l'édition du menu</a></button>



    </body>


</html>
