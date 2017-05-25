-- Remplissage de la base de données PostGres

/*-- Sélection du menu
-- Menu Pastaria
SELECT dish_name FROM dish, compose
WHERE dish.ID_dish = compose.ID_dish AND compose.ID_restaurant='Pastaria' AND compose.ID_date=CURRENT_DATE; -- date de la forme 2017-05-22*/

-- Table 'admin'
INSERT INTO admin (ID_admin, login, psswrd)
VALUES (1, 'admin1', 'thepassword1'),
       (2, 'admin2', 'thepassword2'),
       (3, 'admin3', 'thepassword3'),
       (4, 'admin4', 'thepassword4');

-- Table 'restaurant'
INSERT INTO restaurant (ID_restaurant, restaurant_place)
VALUES ('Entrées Chaudes','Europe'),
       ('Pastaria', 'Europe'),
       ('Cuisine du Monde', 'Europe'),
       ('Saveurs de la Mer', 'Asie'),
       ('Rôtisserie', 'Asie'),
       ('Plats des Régions', 'Asie'),
       ('Grill', 'Australie'),
       ('L\'(x)tra', 'Amerique'),
       ('Little Italy', 'Pizzeria');

 -- Table 'date_menu'
 INSERT INTO date_menu (ID_date)
 VALUES ('2017-05-22'),
        ('2017-05-23'),
        ('2017-05-24'),
        ('2017-05-25'),
        ('2017-05-26'),
        ('2017-05-29'),
        ('2017-05-30'),
        ('2017-05-31'),
        ('2017-06-01'),
        ('2017-06-02');

-- Table 'dish'
INSERT INTO dish (dish_name)
VALUES ('Feuilleté de Chèvre'),
       ('Boulettes de Boeuf Sauce Napolitaine (Boeuf origine France)'),
       ('Entrecôte Grillée (Boeuf origine France)'),
       ('Gratin Dauphinois'),
       ('Haricots Plats'),
       ('Omelette aux Pommes de Terre'),
       ('Frites'),
       ('Steack Haché'),
       ('Filet de Poisson Sauce Bordelaise'),
       ('Tagliatelles'),
       ('Haricots Verts Persillés'),
       ('Emincé de Volaille Sauce aux Epices Douces'),
       ('Pommes de Terre Sautées'),
       ('Fondue de Poireaux'),
       ('Kebab'),
       ('Rosbeef Sauce au Poivre'),
       ('Gratin de Choux Fleur'),
       ('Bavette Sauce Echalote'),
       ('Potatoes'),
       ('Tomate Provençale'),
       ('Cheeseburger'),
       ('Pommes de Terre Rösti'),
       ('4 Fromages'),
       ('Flamenkuche'),
       ('Margarita'),
       ('Orientale'),
       ('Madrilène'),
       ('Chèvre Miel'),
       ('Normande'),
       ('Lasagne Bolognaise (Boeuf origine France)'),
       ('Filet de Saumon Sauce Echalote'),
       ('Riz Thaï'),
       ('Ratatouille Maison'),
       ('Tarte Oignons Lardons (Porc)'),
       ('Feuilleté au Fromage'),
       ('Chipolatas'),
       ('Lentilles'),
       ('Couscous'),
       ('Purée'),
       ('Cuisses de Poulet Tex-Mex'),
       ('Quiche Lorraine'),
       ('Semoule'),
       ('Quenelles de Brochet'),
       ('Spaghettis Sauce Bolognaise');


-- Table 'composition'
INSERT INTO compose (ID_date, ID_restaurant, ID_dish)
VALUES ('2017-05-22','Pastaria', 2),
       ('2017-05-22','Pastaria', 10),
       ('2017-05-22','Little Italy', 25),
       ('2017-05-22','Little Italy', 23),
       ('2017-05-22','L\'(x)tra', 3),
       ('2017-05-22','L\'(x)tra', 4),
       ('2017-05-22','Entrées Chaudes', 1),
       ('2017-05-22','Saveurs de la Mer', 9),
       ('2017-05-22','Saveurs de la Mer', 5),
       ('2017-05-22','Grill', 6),
       ('2017-05-22','Grill', 7),
       ('2017-05-22','Rôtisserie', 36),
       ('2017-05-22','Rôtisserie', 39),
       ('2017-05-22','Cuisine du Monde', 40),
       ('2017-05-22','Cuisine du Monde', 42),
       ('2017-05-22','Cuisine du Monde', 33),
       ('2017-05-24','Pastaria', 44),
       ('2017-05-24','Pastaria', 11),
       ('2017-05-24','Grill', 8),
       ('2017-05-24','Grill', 7),
       ('2017-05-25','Little Italy', 24),
       ('2017-05-25','Little Italy', 26),
       ('2017-05-25','L\'(x)tra', 21),
       ('2017-05-25','L\'(x)tra', 22),
       ('2017-05-25','L\'(x)tra', 20),
       ('2017-05-25','Entrées Chaudes', 34),
       ('2017-05-25','Pastaria', 2),
       ('2017-05-25','Pastaria', 10),
       ('2017-05-25','Saveurs de la Mer', 31),
       ('2017-05-25','Saveurs de la Mer', 32),
       ('2017-05-25','Saveurs de la Mer', 33),
       ('2017-05-25','Grill', 8),
       ('2017-05-25','Grill', 7),
       ('2017-05-25','Rôtisserie', 36),
       ('2017-05-25','Rôtisserie', 37),
       ('2017-05-25','Cuisine du Monde', 40),
       ('2017-05-25','Cuisine du Monde', 42),
       ('2017-05-25','Cuisine du Monde', 33),
       ('2017-05-25','Plats des Régions', 30);
