-- Création de la base de données PostGres

CREATE TABLE IF NOT EXISTS ru_user (
  ID_user INTEGER,
  login varchar(50),
  psswrd varchar(100),
  role INTEGER,
  PRIMARY KEY (ID_user)
);

CREATE TABLE IF NOT EXISTS restaurant (
  ID_restaurant varchar(50),
  lieu_restaurant varchar(50),
  PRIMARY KEY (ID_restaurant)
);

CREATE TABLE IF NOT EXISTS plat (
  ID_plat SERIAL,
  nom_plat varchar(100),
  PRIMARY KEY (ID_plat)
);

CREATE TABLE IF NOT EXISTS menu (
	ID_menu SERIAL,
	PRIMARY KEY (ID_menu)
);


CREATE TABLE IF NOT EXISTS composition (
  date_composition date,
  ID_menu INTEGER,
  ID_plat INTEGER,
  PRIMARY KEY (date_composition, ID_menu, ID_plat),
  FOREIGN KEY (ID_menu) REFERENCES menu(ID_menu),
  FOREIGN KEY (ID_plat) REFERENCES plat(ID_plat)
);

CREATE TYPE noteavis AS ENUM('0','1','2','3','4','5');

CREATE TABLE IF NOT EXISTS avis (
  ID_avis INTEGER,
  auteur varchar(30),
  note noteavis,
  description char(150),
  PRIMARY KEY (ID_avis)
);

CREATE TABLE IF NOT EXISTS apport (
  ID_apport INTEGER,
  calories INTEGER,
  lipides INTEGER,
  glucides INTEGER,
  sucres INTEGER,
  proteines INTEGER,
  fibres INTEGER,
  sodium INTEGER,
  PRIMARY KEY (ID_apport)
);
