<?php
  require_once "m_model.php";
  /**
   * Classe permettant l'interaction avec la table "restaurant"
   * Hérite de la classe Model
   * @author AlexAufauvre
   */
  class CompositionModel extends Model {
    /**
     * @var $pk_key clé primaire de la table
     */
    protected $pk_key = 'date_composition';
    /**
     * @var $resto clé ID_restaurant de la table
     */
    protected $resto = 'ID_restaurant';
    /**
     * @var $table table de la base de données utilisée par la classe
     */
    protected $table = 'composition';

    /**
     * Fonction pour la récupération d'un enregistrement en particulier
     * @param int $id identifiant de l'enregistrement
     * @return array tableau associatif
     */
    public function getMenu($id) {
      try{
        $sql = 'SELECT ID_plat FROM '.$this->table.' WHERE '.$this->pk_key.' =' .date('Y-m-d'). ' AND ' .$this->resto.' = :id';
        $req = $this->query($sql,array(":id"=>$id));
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
