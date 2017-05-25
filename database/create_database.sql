-- Création de la base de données PostGres

/*DROP TABLE admin CASCADE;
DROP TABLE restaurant CASCADE;
DROP SEQUENCE IF EXISTS SERIAL;
DROP TABLE dish CASCADE;
DROP TABLE date_menu CASCADE;
DROP TABLE compose CASCADE;
DROP TYPE ratereview CASCADE;
DROP TABLE review CASCADE;
DROP TABLE nutrition CASCADE;*/

CREATE TABLE IF NOT EXISTS admin (
  ID_admin INTEGER,
  login varchar(64),
  psswrd varchar(128),
  PRIMARY KEY (ID_admin)
);

CREATE TABLE IF NOT EXISTS restaurant (
  ID_restaurant varchar(64),
  restaurant_place varchar(64),
  PRIMARY KEY (ID_restaurant)
);

CREATE TABLE IF NOT EXISTS nutrition (
  ID_nutrition INTEGER,
  calories INTEGER,
  lipids INTEGER,
  carbohydrates INTEGER,
  proteins INTEGER,
  fibers INTEGER,
  sodium INTEGER,
  PRIMARY KEY (ID_nutrition)
);

CREATE TABLE IF NOT EXISTS dish (
  ID_dish SERIAL,
  dish_name varchar(128),
  ID_nutrition INTEGER,
  PRIMARY KEY (ID_dish),
  FOREIGN KEY (ID_nutrition) REFERENCES nutrition(ID_nutrition)
);

CREATE TABLE date_menu(
  ID_date date,
  PRIMARY KEY (ID_date)
);

CREATE TABLE IF NOT EXISTS compose (
  ID_date date,
  ID_restaurant varchar(64),
  ID_dish INTEGER,
  PRIMARY KEY (ID_date, ID_restaurant, ID_dish),
  FOREIGN KEY (ID_restaurant) REFERENCES restaurant(ID_restaurant),
  FOREIGN KEY (ID_dish) REFERENCES dish(ID_dish),
  FOREIGN KEY (ID_date) REFERENCES date_menu(ID_date)
);

CREATE TYPE ratereview AS ENUM('0','1','2','3','4','5');

CREATE TABLE IF NOT EXISTS review (
  ID_review INTEGER,
  ID_dish INTEGER,
  author varchar(32),
  rate ratereview,
  comment char(256),
  PRIMARY KEY (ID_review),
  FOREIGN KEY (ID_dish) REFERENCES dish(ID_dish)
);
