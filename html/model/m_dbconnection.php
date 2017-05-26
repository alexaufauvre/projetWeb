<?php
/**
 * Classe de connexion à une base de données
 * S'inspire du pattern singleton pour n'ouvrir qu'une seule connexion
 * @author AlexAufauvre
 */

class DBConnectionModel {

    /**
    * Paramètres pour l'accès à la base de données
    * @var $host hôte de la base de données
    */
   static private $host = "ec2-54-228-255-234.eu-west-1.compute.amazonaws.com";
   /**
    * @var $database nom de la base de données
    */
   static private $database   = "dfaar7m27gf6oe";
   /**
    * @var $user utilisateur pour la connexion à la base de données
    */
   static private $user = "troqpmtpbxkeni";
   /**
    * @var $password mot de passe pour la connexion à la base de données
    */
   static private $password = "2e8bc26da2710462f3b894ddc36f19253ce3023f6d7acd5378ae2de4de942ffb";
   /**
    * Singleton
    * @var $pdo variable contenant l'instance de la connexion
    */
   static private $pdo = null;
   /**
    * Obenir le singleton
    * @return PDO l'instance de la connexion
    */
   static function getInstance() {
      if (self::$pdo == null) {
         $dsn = sprintf("pgsql:host=%s;dbname=%s", self::$host, self::$database);
         try {
            self::$pdo = new PDO($dsn, self::$user, self::$password);
         } catch (PDOException $e) {
            exit('<p>Erreur de connexion au serveur '.self::$host.' ('.self::$user
                 .')<br/>'.$e->getMessage().'</p>');
         }
      }
      return self::$pdo;
   }
}
?>
