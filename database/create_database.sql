-- Création de la base de données

CREATE TABLE IF NOT EXISTS admin (
  ID_admin INTEGER,
  login varchar(50),
  psswrd varchar(100),
  PRIMARY KEY (ID_admin)
);

CREATE TABLE IF NOT EXISTS restaurant (
  ID_restaurant varchar(50),
  lieu_restaurant varchar(50),
  PRIMARY KEY (ID_restaurant)
);

CREATE TABLE IF NOT EXISTS plat (
  ID_plat INTEGER AUTO_INCREMENT,
  nom_plat varchar(100),
  PRIMARY KEY (ID_plat)
);

CREATE TABLE IF NOT EXISTS menu (
	ID_menu INTEGER AUTO_INCREMENT,
	PRIMARY KEY (ID_menu)
);


CREATE TABLE IF NOT EXISTS composition (
  date_composition date,
  ID_menu INTEGER,
  ID_plat INTEGER,
  PRIMARY KEY (date_composition, ID_menu, ID_plat),
  FOREIGN KEY (ID_menu) REFERENCES menu(ID_menu),
  FOREIGN KEY (ID_plat) REFERENCES plat(ID_plat),
);

CREATE TABLE IF NOT EXISTS avis (
  ID_avis INTEGER,
  auteur varchar(30),
  note ENUM('0','1','2','3','4','5'),
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

);

/*ALTER TABLE composition ADD FOREIGN KEY (ID_menu) REFERENCES menu(ID_menu) ON DELETE CASCADE;
ALTER TABLE composition ADD FOREIGN KEY (ID_plat) REFERENCES plat(ID_plat) ON DELETE CASCADE;
ALTER TABLE composition ADD PRIMARY KEY (ID_menu) REFERENCES menu(ID_menu) ON DELETE CASCADE;
ALTER TABLE composition ADD PRIMARY KEY (ID_plat) REFERENCES plat(ID_plat) ON DELETE CASCADE;*/

