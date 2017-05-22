<!DOCTYPE html>
<html>
    <head>
        <title>RU Hungry</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="html/style.css">
        <?php require_once "html/model/m_composition.php";
        require_once "html/model/m_plat.php";
        ?>

    </head>


    <body>
        <h1 class="TitreAccueil"><?php echo 'Menu du ' .date('d/m/Y'); ?></h1>


        <div id="container-fluid">
            <div class="row">
                <div class="col-md-4 col-xs-12"><h2>Little Italy</h2>
                  <br>

                    <?php
                    $platmodel = new PlatModel();
                    $nom = 'Frites';
                    $platmodel->getByNomPlat($nom);
                    /*$compositionmodel = new CompositionModel();
                    $resto = 'Little Italy';
                    echo $compositionmodel->getMenu($resto);*/ ?>

                    <p><button type="button" class="btn btn-link"><a href="html/view/v_infoMenu.php">>>Infos menu</a></button>
                      <br/>
          <button type="button" class="btn btn-link">
    <a href="html/view/v_infoMenu.php">>>Tarifs</a></button> <!-- Modal -->
  </p>
    </div>

  <div class="col-md-4 col-xs-12"><!-- <h2>Cuisine du Monde</h2>
        <br>
        <p>Entrée</p>
        <br>
        <p>Plat 1</p>
        <br>
        <p>Plat 2</p>
        <br>
        <p><button type="button" class="btn btn-link"><a href="view/v_infoMenu.php">>>Infos menu</a></button>
          <br/>
          <button type="button" class="btn btn-link">
    <a href="view/v_infoMenu.php">>>Tarifs</a></button></p> -->


    <div id="myCarousel" class="column carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class=" carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <h2>Cuisine du Monde</h2>
            <br>
            <p>Entrée</p>
            <br>
            <p>Plat 1</p>
            <br>
            <p>Plat 2</p>
            <br>
            <p><button type="button" class="btn btn-link"><a href="html/view/v_infoMenu.php">>>Infos menu</a></button>
              <br/>
              <button type="button" class="btn btn-link">
        <a href="html/view/v_infoMenu.php">>>Tarifs</a></button> <!-- Modal -->
      </p>
        </div>

        <div class="item">
          <h2>Pastaria</h2>
            <br>
            <p>Entrée</p>
            <br>
            <p>Plat 1</p>
            <br>
            <p>Plat 2</p>
            <br>
            <p><button type="button" class="btn btn-link"><a href="html/view/v_infoMenu.php">>>Infos menu</a></button>
              <br/>
              <button type="button" class="btn btn-link">
        <a href="html/view/v_infoMenu.php">>>Tarifs</a></button> <!-- Modal -->
      </p>
        </div>

        <div class="item">
          <h2>Saveurs de la Mer</h2>
            <br>
            <p>Entrée</p>
            <br>
            <p>Plat 1</p>
            <br>
            <p>Plat 2</p>
            <br>
            <p><button type="button" class="btn btn-link"><a href="html/view/v_infoMenu.php">>>Infos menu</a></button>
              <br/>
              <button type="button" class="btn btn-link">
        <a href="html/view/v_infoMenu.php">>>Tarifs</a></button> <!-- Modal -->
      </p>
        </div>

        <div class="item">
          <h2>Rôtisserie</h2>
            <br>
            <p>Entrée</p>
            <br>
            <p>Plat 1</p>
            <br>
            <p>Plat 2</p>
            <br>
            <p><button type="button" class="btn btn-link"><a href="html/view/v_infoMenu.php">>>Infos menu</a></button>
              <br/>
              <button type="button" class="btn btn-link">
        <a href="html/view/v_infoMenu.php">>>Tarifs</a></button> <!-- Modal -->
      </p>
        </div>

        <div class="item">
          <h2>Grill</h2>
            <br>
            <p>Entrée</p>
            <br>
            <p>Plat 1</p>
            <br>
            <p>Plat 2</p>
            <br>
            <p><button type="button" class="btn btn-link"><a href="html/view/v_infoMenu.php">>>Infos menu</a></button>
              <br/>
              <button type="button" class="btn btn-link">
        <a href="html/view/v_infoMenu.php">>>Tarifs</a></button> <!-- Modal -->
      </p>
        </div>


      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


  </div>


      <div class="col-md-4 col-xs-12"><h2>L'(x)tra</h2>
        <br>
        <p>Entrée</p>
        <br>
        <p>Plat 1</p>
        <br>
        <p>Plat 2</p>
        <br>
        <p><button type="button" class="btn btn-link">
          <a href="html/view/v_infoMenu.php">>>Infos menu</a></button>
          <br/>
          <button type="button" class="btn btn-link">
            <a href="html/view/v_infoMenu.php">>>Tarifs</a></button> <!-- Modal -->
          </p>


        </div>
    </div>
</div>


<p><button type="button" class="btn btn-default btn-block"><a href="html/view/v_menuSemaine.php">Menu de la semaine</a></button></p>

    <p><button type="button" class="btn btn-warning"><a href="html/view/v_connexion.php">Connexion Admin</a></button>
</p>
          <?php
/*$restaurant = "Pastaria";
echo 'Le menu de ' .$restaurant. ' est :';*/
?>
    </body>


</html>
