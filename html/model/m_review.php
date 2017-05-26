<?php
  require_once "m_model.php";
  /**
   * Classe permettant l'interaction avec la table "nutrition"
   * Hérite de la classe Model
   * @author AlexAufauvre
   */
  class ReviewModel extends Model {
    /**
     * @var $pk_key clé primaire de la table
     */
    protected $pk_key = 'ID_review';
    /**
     * @var $table table de la base de données utilisée par la classe
     */
    protected $table = 'review';


  }
?>
