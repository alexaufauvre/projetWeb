<!DOCTYPE html>
<html>
    <head>
<!-- Page de sélection du menu de la semaine  -->

        <title>RU Hungry</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../style.css">

    </head>

    <body>

        <h1 class="HomeTitle"><?php echo 'Menu du ' .date('d/m/Y'); ?></h1>

          <p>

            <div class="form-group">

              <label for="sel1">Sélectionner le restaurant</label>
              <select class="form-control" id="sel1">

                <option>Entrée chaude</option>
                <option>Cuisine du Monde</option>
                <option>Rôtisserie</option>
                <option>Saveurs de la Mer</option>
                <option>Pastaria</option>
                <option>Plats des Régions</option>
                <option>Grill</option>
                <option>Little Italy</option>
                <option>L'(x)tra</option>

              </select>

            </div>


            <div class="form-group">

              <label for="sel1">Par jour</label>
              <select class="form-control" id="sel1">

                <option>Sélection jour</option>
                
              </select>

            </div>

            <p><button type="button" class="btn btn-warning"> <a href="../../index.php">Retour</a></button>
            </p>

        </p>
    </body>


</html>
