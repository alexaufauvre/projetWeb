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
        <h1 class="HomeTitle">Connexion admin</h1>

        <p>
          <!-- Formulaire de connexion -->
          <form class="form-horizontal" action="../controller/c_editMenu.php" method="post"> <!-- Avec une vraie authentification: action="../controller/c_connection.php" -->

              <div class="form-group">
                <label class="control-label col-sm-2" for="identifiant">Identifiant :</label>
                  <div class="col-sm-5">
                    <input type="text" name ="username" class="form-control" id="identifiant" placeholder="Entrer identifiant">
                  </div>
              </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-5">
                  <input type="password" name="password" class="form-control" id="pwd" placeholder="Entrer mot de passe">
                </div>
              </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>

          </form>

          <br>
          (Cliquez directement sur SUBMIT)
          <br>


        </p>

        <p>

          <button type="button" class="btn btn-warning"><a href="../../index.php">Retour</a></button>

        </p>

    </body>


</html>
