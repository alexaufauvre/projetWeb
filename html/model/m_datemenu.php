<?php
  require_once "m_model.php";
  /**
   * Classe permettant l'interaction avec la table "plat"
   * Hérite de la classe Model
   * @author AlexAufauvre
   */
  class DateMenuModel extends Model {
    /**
     * @var $pk_key clé primaire de la table
     */
    protected $pk_key = 'ID_date';
    /**
     * @var $table table de la base de données utilisée par la classe
     */
    protected $table = 'date_menu';

    /**
     * Insertion d'une nouvelle date dans la base
     * @param array $menu tableau contenant les valeurs à insérer dans la table
     */
    public function setDate($date) {
      try {
        $sql = 'INSERT INTO '.$this->table.'(ID_date) VALUES (:date) ON CONFLICT DO NOTHING';
        echo $sql;
        $req = $this->query($sql, array(':date' => $date));
        return $this->database->lastInsertId();
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de l\'insertion des données dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }//setDate




  }
?>
