<?php
  require_once "m_model.php";
  /**
   * Classe permettant l'interaction avec la table "compose"
   * Hérite de la classe Model
   * @author AlexAufauvre
   */
  class ComposeModel extends Model {
    /**
     * @var $pk_key clé primaire de la table
     */
    protected $pk_key = 'ID_date';
    /**
     * @var $resto clé ID_restaurant de la table
     */
    protected $restaurant = 'ID_restaurant';
    /**
     * @var $resto clé ID_restaurant de la table
     */
    protected $dish = 'ID_dish';
    /**
     * @var $table table de la base de données utilisée par la classe
     */
    protected $table = 'compose';


    /**
     * Fonction pour la récupération des id des plats du menu d'un restaurant
     * @param string $id identifiant du restaurant
     * @return array tableau associatif
     */
    public function getMenu($id) {
      try{
        $sql = 'SELECT ID_dish FROM '.$this->table.' WHERE '.$this->pk_key.' = \'' .date('Y-m-d'). '\' AND ' .$this->restaurant.' = :id';
        $req = $this->query($sql,array(":id"=>$id));
        $res = $req->fetchAll(PDO::FETCH_ASSOC);
        return $res;
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la selection de l\'objet dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }//getMenu


    /**
     * Fonction pour la récupération des noms des plats du menu d'un restaurant
     * @param string $id identifiant du restaurant
     * @return array tableau associatif
     */
    public function getMenuRestaurant($id) {
      try{
        $sql = 'SELECT dish_name FROM dish, '.$this->table.' WHERE ' .$this->table. '.ID_dish = dish.ID_dish AND '.$this->pk_key.' = \'' .date('Y-m-d'). '\' AND ' .$this->restaurant.' = :id';
        $req = $this->query($sql,array(":id"=>$id));
        $res = $req->fetchAll(PDO::FETCH_ASSOC);
        return $res;
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la selection de l\'objet dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }//getMenuRestaurant



    /**
     * Insertion d'un nouveau menu dans la base
     * @param date $date identifiant de la date, string $restaurant identifiant du restaurant, int $dish identifiant du plat
     * @return int l'identifiant du nouvel enregistrement
     */
    public function setMenu($date,$restaurant,$dish) {
      try {
        $sql = 'INSERT INTO '.$this->table.'(ID_date, ID_restaurant, ID_dish) VALUES (:date, :restaurant, :dish)';
        $req = $this->query($sql, array(':date' => $date,
                                         ':restaurant' => $restaurant,
                                         ':dish' => $dish));
        return $this->database->lastInsertId();
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de l\'insertion des données dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }//setMenu


    /**
     * Suppression d'un menu dans la base
     * @param date $date identifiant de la date, string $restaurant identifiant du restaurant, int $dish identifiant du plat
     * @return int l'identifiant du nouvel enregistrement
     */
    public function deleteMenu($date,$restaurant,$dish) {
      try {
        $sql = 'DELETE FROM '.$this->table.' WHERE ID_date=:date AND ID_restaurant=:restaurant AND ID_dish=:dish';
        $req = $this->query($sql, array(':date' => $date,
                                         ':restaurant' => $restaurant,
                                         ':dish' => $dish));
        return $this->database->lastInsertId();
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de l\'insertion des données dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }//deleteMenu

  } //composemodel

?>
