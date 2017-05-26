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
        <h1 class="HomeTitle">Ajouter ou supprimer un menu</h1>

          <p>

          <form action="../controller/c_validation.php" method="post">

            <div class="form-group">

              <!-- Formulaire Restaurant -->
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

              <!-- Formulaire Plat 1 -->
              <label for="selDish1">Plat 1</label>

              <select name="Dish1" class="form-control" id="selDish1">

               <option value="Sélectionner le Plat" selected="selected">Sélectionner le Plat</option>
               <option value="Kebab">Kebab</option>
               <option value="Frites">Frites</option>
               <option value="Haricots Plats">Haricots Plats</option>
               <option value="Feuilleté de Chèvre">Feuilleté de Chèvre</option>
               <option value="Boulettes de Boeuf Sauce Napolitaine (Boeuf origine France)">Boulettes de Boeuf Sauce Napolitaine (Boeuf origine France)</option>
               <option value="Entrecôte Grillée (Boeuf origine France)">Entrecôte Grillée (Boeuf origine France)</option>
               <option value="Gratin Dauphinois">Gratin Dauphinois</option>
               <option value="Omelette aux Pommes de Terre">Omelette aux Pommes de Terre</option>
               <option value="Steack Haché">Steack Haché</option>
               <option value="Filet de Poisson Sauce Bordelaise">Filet de Poisson Sauce Bordelaise</option>
               <option value="Tagliatelles">Tagliatelles</option>
               <option value="Haricots Verts Persillés">Haricots Verts Persillés</option>
               <option value="Emincé de Volaille Sauce aux Epices Douces">Emincé de Volaille Sauce aux Epices Douces</option>
               <option value="Pommes de Terre Sautées">Pommes de Terre Sautées</option>
               <option value="Fondue de Poireaux">Fondue de Poireaux</option>
               <option value="Rosbeef Sauce au Poivre">Rosbeef Sauce au Poivre</option>
               <option value="Gratin de Choux Fleur">Gratin de Choux Fleur</option>
               <option value="Bavette Sauce Echalote">Bavette Sauce Echalote</option>
               <option value="Potatoes">Potatoes</option>
               <option value="Tomate Provençale">Tomate Provençale</option>
               <option value="Cheeseburger">Cheeseburger</option>
               <option value="Pommes de Terre Rösti">Pommes de Terre Rösti</option>
               <option value="4 Fromages">4 Fromages</option>
               <option value="Flamenkuche">Flamenkuche</option>
               <option value="Margarita">Margarita</option>
               <option value="Orientale">Orientale</option>
               <option value="Madrilène">Madrilène</option>
               <option value="Chèvre Miel">Chèvre Miel</option>
               <option value="Normande">Normande</option>
               <option value="Lasagne Bolognaise (Boeuf origine France)">Lasagne Bolognaise (Boeuf origine France)</option>
               <option value="Filet de Saumon Sauce Echalote">Filet de Saumon Sauce Echalote</option>
               <option value="Riz Thaï">Riz Thaï</option>
               <option value="Ratatouille Maison">Ratatouille Maison</option>
               <option value="Tarte Oignons Lardons (Porc)">Tarte Oignons Lardons (Porc)</option>
               <option value="Feuilleté au Fromage">Feuilleté au Fromage</option>
               <option value="Chipolatas">Chipolatas</option>
               <option value="Lentilles">Lentilles</option>
               <option value="Couscous">Couscous</option>
               <option value="Purée">Purée</option>
               <option value="Cuisses de Poulet Tex-Mex">Cuisses de Poulet Tex-Mex</option>
               <option value="Quiche Lorraine">Quiche Lorraine</option>
               <option value="Semoule">Semoule</option>
               <option value="Quenelles de Brochet">Quenelles de Brochet</option>
               <option value="Spaghettis Sauce Bolognaise">Spaghettis Sauce Bolognaise</option>

              </select>


              <br>

              <!-- Formulaire Plat 2 -->
              <label for="selDish2">Plat 2</label>

              <select name="Dish2" class="form-control" id="selDish2">

                <option value="Kebab">Kebab</option>
                <option value="Frites">Frites</option>
                <option value="Haricots Plats">Haricots Plats</option>
                <option value="Feuilleté de Chèvre">Feuilleté de Chèvre</option>
                <option value="Boulettes de Boeuf Sauce Napolitaine (Boeuf origine France)">Boulettes de Boeuf Sauce Napolitaine (Boeuf origine France)</option>
                <option value="Entrecôte Grillée (Boeuf origine France)">Entrecôte Grillée (Boeuf origine France)</option>
                <option value="Gratin Dauphinois">Gratin Dauphinois</option>
                <option value="Omelette aux Pommes de Terre">Omelette aux Pommes de Terre</option>
                <option value="Steack Haché">Steack Haché</option>
                <option value="Filet de Poisson Sauce Bordelaise">Filet de Poisson Sauce Bordelaise</option>
                <option value="Tagliatelles">Tagliatelles</option>
                <option value="Haricots Verts Persillés">Haricots Verts Persillés</option>
                <option value="Emincé de Volaille Sauce aux Epices Douces">Emincé de Volaille Sauce aux Epices Douces</option>
                <option value="Pommes de Terre Sautées">Pommes de Terre Sautées</option>
                <option value="Fondue de Poireaux">Fondue de Poireaux</option>
                <option value="Rosbeef Sauce au Poivre">Rosbeef Sauce au Poivre</option>
                <option value="Gratin de Choux Fleur">Gratin de Choux Fleur</option>
                <option value="Bavette Sauce Echalote">Bavette Sauce Echalote</option>
                <option value="Potatoes">Potatoes</option>
                <option value="Tomate Provençale">Tomate Provençale</option>
                <option value="Cheeseburger">Cheeseburger</option>
                <option value="Pommes de Terre Rösti">Pommes de Terre Rösti</option>
                <option value="4 Fromages">4 Fromages</option>
                <option value="Flamenkuche">Flamenkuche</option>
                <option value="Margarita">Margarita</option>
                <option value="Orientale">Orientale</option>
                <option value="Madrilène">Madrilène</option>
                <option value="Chèvre Miel">Chèvre Miel</option>
                <option value="Normande">Normande</option>
                <option value="Lasagne Bolognaise (Boeuf origine France)">Lasagne Bolognaise (Boeuf origine France)</option>
                <option value="Filet de Saumon Sauce Echalote">Filet de Saumon Sauce Echalote</option>
                <option value="Riz Thaï">Riz Thaï</option>
                <option value="Ratatouille Maison">Ratatouille Maison</option>
                <option value="Tarte Oignons Lardons (Porc)">Tarte Oignons Lardons (Porc)</option>
                <option value="Feuilleté au Fromage">Feuilleté au Fromage</option>
                <option value="Chipolatas">Chipolatas</option>
                <option value="Lentilles">Lentilles</option>
                <option value="Couscous">Couscous</option>
                <option value="Purée">Purée</option>
                <option value="Cuisses de Poulet Tex-Mex">Cuisses de Poulet Tex-Mex</option>
                <option value="Quiche Lorraine">Quiche Lorraine</option>
                <option value="Semoule">Semoule</option>
                <option value="Quenelles de Brochet">Quenelles de Brochet</option>
                <option value="Spaghettis Sauce Bolognaise">Spaghettis Sauce Bolognaise</option>

              </select>

              <br>

              <!-- Formulaire Plat 3 -->
              <label for="selDish3">Plat 3</label>
              <select name="Dish3" class="form-control" id="selDish3">

                <option value="Sélectionner le Plat" selected="selected">Sélectionner le Plat</option>
                
                <option value="Kebab">Kebab</option>
                <option value="Frites">Frites</option>
                <option value="Haricots Plats">Haricots Plats</option>
                <option value="Feuilleté de Chèvre">Feuilleté de Chèvre</option>
                <option value="Boulettes de Boeuf Sauce Napolitaine (Boeuf origine France)">Boulettes de Boeuf Sauce Napolitaine (Boeuf origine France)</option>
                <option value="Entrecôte Grillée (Boeuf origine France)">Entrecôte Grillée (Boeuf origine France)</option>
                <option value="Gratin Dauphinois">Gratin Dauphinois</option>
                <option value="Omelette aux Pommes de Terre">Omelette aux Pommes de Terre</option>
                <option value="Steack Haché">Steack Haché</option>
                <option value="Filet de Poisson Sauce Bordelaise">Filet de Poisson Sauce Bordelaise</option>
                <option value="Tagliatelles">Tagliatelles</option>
                <option value="Haricots Verts Persillés">Haricots Verts Persillés</option>
                <option value="Emincé de Volaille Sauce aux Epices Douces">Emincé de Volaille Sauce aux Epices Douces</option>
                <option value="Pommes de Terre Sautées">Pommes de Terre Sautées</option>
                <option value="Fondue de Poireaux">Fondue de Poireaux</option>
                <option value="Rosbeef Sauce au Poivre">Rosbeef Sauce au Poivre</option>
                <option value="Gratin de Choux Fleur">Gratin de Choux Fleur</option>
                <option value="Bavette Sauce Echalote">Bavette Sauce Echalote</option>
                <option value="Potatoes">Potatoes</option>
                <option value="Tomate Provençale">Tomate Provençale</option>
                <option value="Cheeseburger">Cheeseburger</option>
                <option value="Pommes de Terre Rösti">Pommes de Terre Rösti</option>
                <option value="4 Fromages">4 Fromages</option>
                <option value="Flamenkuche">Flamenkuche</option>
                <option value="Margarita">Margarita</option>
                <option value="Orientale">Orientale</option>
                <option value="Madrilène">Madrilène</option>
                <option value="Chèvre Miel">Chèvre Miel</option>
                <option value="Normande">Normande</option>
                <option value="Lasagne Bolognaise (Boeuf origine France)">Lasagne Bolognaise (Boeuf origine France)</option>
                <option value="Filet de Saumon Sauce Echalote">Filet de Saumon Sauce Echalote</option>
                <option value="Riz Thaï">Riz Thaï</option>
                <option value="Ratatouille Maison">Ratatouille Maison</option>
                <option value="Tarte Oignons Lardons (Porc)">Tarte Oignons Lardons (Porc)</option>
                <option value="Feuilleté au Fromage">Feuilleté au Fromage</option>
                <option value="Chipolatas">Chipolatas</option>
                <option value="Lentilles">Lentilles</option>
                <option value="Couscous">Couscous</option>
                <option value="Purée">Purée</option>
                <option value="Cuisses de Poulet Tex-Mex">Cuisses de Poulet Tex-Mex</option>
                <option value="Quiche Lorraine">Quiche Lorraine</option>
                <option value="Semoule">Semoule</option>
                <option value="Quenelles de Brochet">Quenelles de Brochet</option>
                <option value="Spaghettis Sauce Bolognaise">Spaghettis Sauce Bolognaise</option>

              </select>

                <br>

                <!-- Formulaire Date -->
                <label for="selDate">Date</label>
                <input type="date" name="Date" class="form-control" id="selDate">
              </input>

              <br>

              <!-- Submits -->
              <input type="submit" name="submitadd" value="Ajouter menu" id="inputAdd"/>
              <input type="submit" name="submitdel" value="Supprimer menu" id="inputDel"/>
            </div>
          </form>

          <br>

          <p><button type="button" class="btn btn-warning"> <a href="../../index.php">Retour</a></button>
          </p>

    </body>


</html>
