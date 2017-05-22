#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: ru_user
#------------------------------------------------------------

CREATE TABLE ru_user(
        ID_user Int NOT NULL ,
        login   Varchar (50) ,
        psswrd  Varchar (100) ,
        role    Int ,
        PRIMARY KEY (ID_user )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: restaurant
#------------------------------------------------------------

CREATE TABLE restaurant(
        ID_restaurant   Varchar (50) NOT NULL ,
        lieu_restaurant Varchar (50) ,
        PRIMARY KEY (ID_restaurant )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: plat
#------------------------------------------------------------

CREATE TABLE plat(
        ID_plat   int (11) Auto_increment  NOT NULL ,
        nom_plat  Varchar (100) ,
        ID_apport Int ,
        PRIMARY KEY (ID_plat )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: avis
#------------------------------------------------------------

CREATE TABLE avis(
        ID_avis     Int NOT NULL ,
        auteur      Varchar (30) ,
        note        Int ,
        description Varchar (150) ,
        ID_plat     Int ,
        PRIMARY KEY (ID_avis )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: apport
#------------------------------------------------------------

CREATE TABLE apport(
        ID_apport Int NOT NULL ,
        calories  Int ,
        lipides   Int ,
        glucides  Int ,
        sucres    Int ,
        proteines Int ,
        fibres    Int ,
        sodium    Int ,
        PRIMARY KEY (ID_apport )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ru_date
#------------------------------------------------------------

CREATE TABLE ru_date(
        id_date Date NOT NULL ,
        PRIMARY KEY (id_date )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: composition
#------------------------------------------------------------

CREATE TABLE composition(
        ID_plat       Int NOT NULL ,
        ID_restaurant Varchar (50) NOT NULL ,
        id_date       Date NOT NULL ,
        PRIMARY KEY (ID_plat ,ID_restaurant ,id_date )
)ENGINE=InnoDB;

ALTER TABLE plat ADD CONSTRAINT FK_plat_ID_apport FOREIGN KEY (ID_apport) REFERENCES apport(ID_apport);
ALTER TABLE avis ADD CONSTRAINT FK_avis_ID_plat FOREIGN KEY (ID_plat) REFERENCES plat(ID_plat);
ALTER TABLE composition ADD CONSTRAINT FK_composition_ID_plat FOREIGN KEY (ID_plat) REFERENCES plat(ID_plat);
ALTER TABLE composition ADD CONSTRAINT FK_composition_ID_restaurant FOREIGN KEY (ID_restaurant) REFERENCES restaurant(ID_restaurant);
ALTER TABLE composition ADD CONSTRAINT FK_composition_id_date FOREIGN KEY (id_date) REFERENCES ru_date(id_date);
