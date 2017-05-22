<?php
  require_once "m_model.php";
  /**
   * Classe permettant l'interaction avec la table "plat"
   * Hérite de la classe Model
   * @author AlexAufauvre
   */
  class PlatModel extends Model {
    /**
     * @var $pk_key clé primaire de la table
     */
    protected $pk_key = 'ID_plat';
    /**
     * @var $table table de la base de données utilisée par la classe
     */
    protected $table = 'plat';

    /**
     * Sélection d'un plat par son nom
     * @param string $label nom du plat
     * @return array tableau associatif
     */
    public function getByNomPlat($nom) {
      try {
        $sql = "SELECT * FROM ".$this->table." WHERE nom_plat = :nom";
        $req = $this->query($sql,array(":nom"=> $nom));
        $res = $req->fetch(PDO::FETCH_ASSOC);
        return $res;
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la selection de l\'objet dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }

    /**
     * Sélection d'un plat par son nom
     * @return array tableau associatif
     */
    public function getListeNomPlats() {
      try {
        $sql = 'SELECT nom_plat FROM '.$this->table;
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
     * Sélection d'un plat par son nom
     * @return array tableau associatif
     */
    public function getListeIdPlats() {
      try {
        $sql = 'SELECT ID_plat FROM '.$this->table;
        $req = $this->query($sql);
        $res = $req->fetchAll(PDO::FETCH_ASSOC);
        return $res;
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la selection de l\'objet dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }


  }
?>
