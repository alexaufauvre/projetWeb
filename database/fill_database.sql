-- Remplissage de la base de données PostGres

-- Sélection du menu
-- Menu Pastaria
SELECT dish_name FROM dish, composition
WHERE dish.ID_dish = composition.ID_dish AND composition.ID_restaurant='Pastaria' AND composition.ID_date=CURRENT_DATE; -- date de la forme 2017-05-22

-- Table 'admin'
INSERT INTO admin (ID_admin, login, psswrd)
VALUES (1, 'admin1', 'thepassword1'),
       (2, 'admin2', 'thepassword2'),
       (3, 'admin3', 'thepassword3'),
       (4, 'admin4', 'thepassword4');

-- Table 'restaurant'
INSERT INTO restaurant (ID_restaurant, restaurant_place)
VALUES ('Entrée chaude','Europe'),
       ('Pastaria', 'Europe'),
       ('Cuisine du Monde', 'Europe'),
       ('Saveurs de la Mer', 'Europe'),
       ('Rôtisserie', 'Europe'),
       ('dishs des Régions', 'Afrique'),
       ('Grill', 'Afrique'),
       ('L\'(x)tra', 'Amerique'),
       ('Little Italy', 'Chapiteau');

-- Table 'dish'
INSERT INTO dish (dish_name)
VALUES ('Feuilleté de Chèvre'),
       ('Boulettes de Boeuf Sauce Napolitaine (Boeuf origine France)'),
       ('Entrecôte Grillée (Boeuf origine France)'),
       ('Gratin Dauphinois'),
       ('Haricots dishs'),
       ('Omelette aux Pommes de Terre'),
       ('Frites'),
       ('Filet de Poisson Sauce Bordelaise'),
       ('Tagliatelles'),
       ('Haricots Verts Persillés'),
       ('Margarita'),
       ('Orientale');


-- Table 'composition'
INSERT INTO compose (ID_date, ID_restaurant, ID_dish)
VALUES ('2017-05-22','Pastaria', 9),
       ('2017-05-22','Pastaria', 5),
       ('2017-05-22','Little Italy', 11),
       ('2017-05-22','Little Italy', 12),
       ('2017-05-22','L\'(x)tra', 3),
       ('2017-05-22','L\'(x)tra', 4),
       ('2017-05-22','Entrée chaude', 1),
       ('2017-05-22','Saveurs de la Mer', 8),
       ('2017-05-22','Saveurs de la Mer', 5),
       ('2017-05-22','Grill', 6),
       ('2017-05-22','Grill', 7),
       ('2017-05-22','Rôtisserie', 2),
       ('2017-05-22','Rôtisserie', 9),
       ('2017-05-22','Cuisine du Monde', 6),
       ('2017-05-22','Cuisine du Monde', 4),
       ('2017-05-22','Cuisine du Monde', 10);
