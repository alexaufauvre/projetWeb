-- Création de la base de données PostGres

/*DROP TABLE ru_user CASCADE;
DROP TABLE restaurant CASCADE;
DROP TABLE plat CASCADE;
DROP TABLE menu CASCADE;
DROP TABLE composition CASCADE;
DROP TYPE noteavis CASCADE;
DROP TABLE avis CASCADE;
DROP TABLE apport CASCADE;*/

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

CREATE TABLE IF NOT EXISTS plat (
  ID_plat SERIAL,
  nom_plat varchar(100),
  ID_apport INTEGER,
  PRIMARY KEY (ID_plat),
  FOREIGN KEY (ID_apport) REFERENCES apport(ID_apport)
);

CREATE TABLE IF NOT EXISTS ru_date (
	ID_date date,
	PRIMARY KEY (ID_date)
);


CREATE TABLE IF NOT EXISTS composition (
  ID_date date,
  ID_restaurant varchar(50),
  ID_plat INTEGER,
  PRIMARY KEY (ID_date, ID_restaurant, ID_plat),
  FOREIGN KEY (ID_date) REFERENCES ru_date(ID_date),
  FOREIGN KEY (ID_restaurant) REFERENCES restaurant(ID_restaurant),
  FOREIGN KEY (ID_plat) REFERENCES plat(ID_plat)
);

CREATE TYPE noteavis AS ENUM('0','1','2','3','4','5');

CREATE TABLE IF NOT EXISTS avis (
  ID_avis INTEGER,
  ID_plat INTEGER,
  auteur varchar(30),
  note noteavis,
  description char(150),
  PRIMARY KEY (ID_avis),
  FOREIGN KEY (ID_plat) REFERENCES plat(ID_plat)
);
