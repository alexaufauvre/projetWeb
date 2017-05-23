<?php
  require_once "Model.php";
  /**
   * Classe permettant l'interaction avec la table "admin"
   * Hérite de la classe Model
   * @author AlexAufauvre
   */
  class AdminModel extends Model {
    /**
     * @var $pk_key clé primaire de la table
     */
    protected $pk_key = 'ID_admin';
    /**
     * @var $table table de la base de données utilisée par la classe
     */
    protected $table = 'admin';


    /**
     * Sélection d'un admin par son login
     * @param string $login le login de l'admin
     * @return array tableau associatif contenant les informations du compte
     */
    public function getByLogin($login) {
      try{
        $sql = 'SELECT * FROM '.$this->table.' WHERE login = :login';
        $req = $this->query($sql,array(":login"=>$login));
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
