<?php
  require_once "m_model.php";
  /**
   * Classe permettant l'interaction avec la table "restaurant"
   * Hérite de la classe Model
   * @author AlexAufauvre
   */
  class RestaurantModel extends Model {
    /**
     * @var $pk_key clé primaire de la table
     */
    protected $pk_key = 'ID_restaurant';
    /**
     * @var $table table de la base de données utilisée par la classe
     */
    protected $table = 'restaurant';

    /**
     * Fonction pour récupérer tous les noms de restaurants
     * @return array tableau associatif
     */
    public function getListRestaurants() {
      try{
        $sql = 'SELECT ID_restaurant FROM '.$this->table;
        $req = $this->query($sql);
        $res = $req->fetchAll(PDO::FETCH_ASSOC);
        return $res;
      }
      catch (PDOException $e)
      {
        exit('<p>Erreur lors de la sélection sur la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }
?>
