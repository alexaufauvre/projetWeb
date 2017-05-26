<!DOCTYPE html>
<html>
    <head>
<!-- Vue de la page d'accueil -->
        <title>RU Hungry</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="html/style.css">


    </head>


    <body>
        <h1 class="HomeTitle"><?php echo 'Menu du ' .date('d/m/Y'); ?></h1>

<!-- Little Italy -->
          <div id="container-fluid">
            <div class="row">
                <div class="col-md-4 col-xs-12"><h2>Little Italy</h2>

                  <br>
                  <!-- Affichage du menu -->
                    <?php

                    foreach($menuLittleItaly as $element)
                        {
                            echo $element['dish_name'] . '<br><br>';
                          }

                    ?>

                    <br>

                      <p>
                        <button type="button" class="btn btn-link"><a href="html/view/v_infoMenu.php">>>Infos menu</a></button>

                        <br/>

                        <button type="button" class="btn btn-link"><a href="html/view/v_infoMenu.php">>>Tarifs</a></button>
                        </p>

                      </div>


<!-- Carousel -->
        <div class="col-md-4 col-xs-12">


          <div id="myCarousel" class="column carousel slide" data-ride="carousel">

      <!-- Indicators -->
        <ol class=" carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
          <li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>

      <!-- Wrapper for slides -->
        <div class="carousel-inner">

<!-- Cuisine du Monde -->
          <div class="item active">

            <h2>Cuisine du Monde</h2>

              <br>
              <!-- Affichage du menu -->
                <?php

                foreach($menuCuisineDuMonde as $element)
                  {
                      echo $element['dish_name'] . '<br><br>';

                    }

                    ?>

              <br>

              <p><button type="button" class="btn btn-link"><a href="html/view/v_infoMenu.php">>>Infos menu</a></button>
                <br/>
                <button type="button" class="btn btn-link">
                  <a href="html/view/v_infoMenu.php">>>Tarifs</a></button>
                </p>
              </div>

<!-- Pastaria -->
        <div class="item">

          <h2>Pastaria</h2>

            <br>
            <!-- Affichage du menu -->
              <?php

              foreach($menuPastaria as $element)
                  {
                      echo $element['dish_name'] . '<br><br>';
                    }

                    ?>
            <br>

              <p><button type="button" class="btn btn-link"><a href="html/view/v_infoMenu.php">>>Infos menu</a></button>
                <br/>
                <button type="button" class="btn btn-link">
                  <a href="html/view/v_infoMenu.php">>>Tarifs</a></button>
                </p>

              </div>

<!-- Saveurs de la Mer -->
        <div class="item">

          <h2>Saveurs de la Mer</h2>

            <br>
            <!-- Affichage du menu -->
              <?php

              foreach($menuSaveursDeLaMer as $element)
                  {
                      echo $element['dish_name'] . '<br><br>';
                    }

                    ?>

            <br>

            <p><button type="button" class="btn btn-link"><a href="html/view/v_infoMenu.php">>>Infos menu</a></button>
                <br/>
                <button type="button" class="btn btn-link">
                  <a href="html/view/v_infoMenu.php">>>Tarifs</a></button>
                </p>

              </div>

<!-- Entrées Chaudes -->
        <div class="item">

          <h2>Entrées Chaudes</h2>

            <br>
            <!-- Affichage du menu -->
              <?php

              foreach($menuEntreesChaudes as $element)
                  {
                      echo $element['dish_name'] . '<br><br>';
                    }

                    ?>

            <br>

              <p><button type="button" class="btn btn-link"><a href="html/view/v_infoMenu.php">>>Infos menu</a></button>
                <br/>
                <button type="button" class="btn btn-link">
                  <a href="html/view/v_infoMenu.php">>>Tarifs</a></button>
                </p>

        </div>

<!-- Rôtisserie -->
        <div class="item">

          <h2>Rôtisserie</h2>

            <br>
            <!-- Affichage du menu -->
              <?php

              foreach($menuRotisserie as $element)
                  {
                      echo $element['dish_name'] . '<br><br>';
                    }

                    ?>

                    <br>

                    <p><button type="button" class="btn btn-link"><a href="html/view/v_infoMenu.php">>>Infos menu</a></button>
                      <br/>
                      <button type="button" class="btn btn-link">
                        <a href="html/view/v_infoMenu.php">>>Tarifs</a></button>
                      </p>

                    </div>

<!-- Plats des Régions -->
        <div class="item">

          <h2>Plats des Régions</h2>

            <br>
            <!-- Affichage du menu -->
              <?php

              foreach($menuPlatsDesRegions as $element)
                  {
                      echo $element['dish_name'] . '<br><br>';
                    }

                    ?>

            <br>

            <p><button type="button" class="btn btn-link"><a href="html/view/v_infoMenu.php">>>Infos menu</a></button>
                <br/>
                <button type="button" class="btn btn-link">
                  <a href="html/view/v_infoMenu.php">>>Tarifs</a></button>
                </p>

        </div>

<!-- Grill -->
        <div class="item">

          <h2>Grill</h2>

            <br>
            <!-- Affichage du menu -->
              <?php

              foreach($menuGrill as $element)
                  {
                      echo $element['dish_name'] . '<br><br>';
                    }

                    ?>

            <br>

              <p><button type="button" class="btn btn-link"><a href="html/view/v_infoMenu.php">>>Infos menu</a></button>
                <br/>
                <button type="button" class="btn btn-link">
                  <a href="html/view/v_infoMenu.php">>>Tarifs</a></button>
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


<!-- L'(x)tra -->
      <div class="col-md-4 col-xs-12"><h2>L'(x)tra</h2>

        <br>
        <!-- Affichage du menu -->        
          <?php

          foreach($menuLxtra as $element)
              {
                  echo $element['dish_name'] . '<br><br>';
                }

                ?>

        <br>

          <p><button type="button" class="btn btn-link">
            <a href="html/view/v_infoMenu.php">>>Infos menu</a></button>
            <br/>
            <button type="button" class="btn btn-link">
              <a href="html/view/v_infoMenu.php">>>Tarifs</a></button>
            </p>


        </div>
    </div>
</div>


  <p><button type="button" class="btn btn-default btn-block"><a href="html/view/v_weekMenu.php">Menu de la semaine</a></button></p>

  <p><button type="button" class="btn btn-warning"><a href="html/view/v_connection.php">Connexion Admin</a></button></p>


    </body>


</html>
