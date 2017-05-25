<?php
  require_once "m_model.php";
  /**
   * Classe permettant l'interaction avec la table "plat"
   * Hérite de la classe Model
   * @author AlexAufauvre
   */
  class DishModel extends Model {
    /**
     * @var $pk_key clé primaire de la table
     */
    protected $pk_key = 'ID_dish';
    /**
     * @var $table table de la base de données utilisée par la classe
     */
    protected $table = 'dish';

    /**
     * Sélection d'un plat par son nom
     * @param string $label nom du plat
     * @return array tableau associatif
     */
    public function getByDishName($name) {
      try {
        $sql = "SELECT * FROM ".$this->table." WHERE dish_name = :name";
        $req = $this->query($sql,array(":name"=> $name));
        $res = $req->fetch(PDO::FETCH_ASSOC);
        return $res;
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la selection de l\'objet dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }

    /**
     * Sélection de la liste des noms des plats
     * @return array tableau associatif
     */
    public function getListDishName() {
      try {
        $sql = 'SELECT dish_name FROM '.$this->table;
        $req = $this->query($sql);
        $res = $req->fetchAll(PDO::FETCH_ASSOC);
        return $res;
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la selection de l\'objet dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }

    /**
     * Sélection de la liste des id des plats
     * @return array tableau associatif
     */
    public function getListIdDish() {
      try {
        $sql = 'SELECT ID_dish FROM '.$this->table;
        $req = $this->query($sql);
        $res = $req->fetchAll(PDO::FETCH_ASSOC);
        return $res;
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la selection de l\'objet dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }


    /**
     * Sélection de l'id d'un plat
     * @param string $label nom du plat
     * @return array tableau associatif
     */
    public function getIdDish($name) {
      try {
        $sql = "SELECT ID_dish FROM ".$this->table." WHERE dish_name = :name";
        $req = $this->query($sql,array(":name"=> $name));
        $res = $req->fetch(PDO::FETCH_ASSOC);
        return $res;
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la selection de l\'objet dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }


  }
?>
