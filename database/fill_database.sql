-- Remplissage de la base de données PostGres

-- Sélection du menu
-- Menu Pastaria
SELECT nom_plat FROM plat, composition
WHERE plat.ID_plat = composition.ID_plat AND composition.ID_restaurant='Pastaria' AND composition.date_composition=CURRENT_DATE; -- date de la forme 2017-05-22

-- Table 'ru_user'
INSERT INTO ru_user (ID_user, login, psswrd, role)
VALUES (1, 'admin1', 'thepassword1', 0),
       (2, 'admin2', 'thepassword2', 0),
       (3, 'admin3', 'thepassword3', 0),
       (4, 'admin4', 'thepassword4', 0);

-- Table 'restaurant'
INSERT INTO restaurant (ID_restaurant, lieu_restaurant)
VALUES ('Entrée chaude','Europe'),
       ('Pastaria', 'Europe'),
       ('Cuisine du Monde', 'Europe'),
       ('Saveurs de la Mer', 'Europe'),
       ('Rôtisserie', 'Europe'),
       ('Grill', 'Afrique'),
       ('L\'(x)tra', 'Amerique'),
       ('Little Italy', 'Chapiteau');

-- Table 'plat'
INSERT INTO plat (nom_plat)
VALUES ('Feuilleté de Chèvre'),
       ('Boulettes de Boeuf Sauce Napolitaine (Boeuf origine France)'),
       ('Entrecôte Grillée (Boeuf origine France)'),
       ('Gratin Dauphinois'),
       ('Haricots Plats'),
       ('Omelette aux Pommes de Terre'),
       ('Frites'),
       ('Filet de Poisson Sauce Bordelaise'),
       ('Tagliatelles'),
       ('Haricots Verts Persillés'),
       ('Margarita'),
       ('Orientale');

-- Table 'composition'
INSERT INTO composition (date_composition, ID_restaurant, ID_plat)
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
