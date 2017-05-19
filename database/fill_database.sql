-- Remplissage de la base de données

-- Table 'admin'
INSERT INTO admin (ID_admin, login, psswrd)
VALUES (1, 'admin1', 'thepassword1'),
       (2, 'admin2', 'thepassword2'),
       (3, 'admin3', 'thepassword3'),
       (4, 'admin4', 'thepassword4');

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
