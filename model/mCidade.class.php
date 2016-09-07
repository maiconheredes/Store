<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 07/09/2016
 * Time: 17:59
 */
class mCidade extends dbConnection{
    private $id_cid;
    private $nome_cid;
    private $id_est_cid;

    public function setIdCid($id_cid){
        $this->id_cid = $id_cid;
    }
    public function setIdEstCid($id_est_cid){
        $this->id_est_cid = $id_est_cid;
    }
    public function setNomeCid($nome_cid){
        $this->nome_cid = $nome_cid;
    }

    public function getIdCid(){
        return $this->id_cid;
    }
    public function getIdEstCid(){
        return $this->id_est_cid;
    }
    public function getNomeCid(){
        return $this->nome_cid;
    }

}

?>