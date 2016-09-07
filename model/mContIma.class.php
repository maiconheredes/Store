<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 07/09/2016
 * Time: 18:08
 */
class mContIma extends dbConnection{
    private $id_contima;
    private $id_conteudo_contima;
    private $id_imagem_contima;

    public function setIdConteudoContima($id_conteudo_contima){
        $this->id_conteudo_contima = $id_conteudo_contima;
    }
    public function setIdContima($id_contima){
        $this->id_contima = $id_contima;
    }
    public function setIdImagemContima($id_imagem_contima){
        $this->id_imagem_contima = $id_imagem_contima;
    }

    public function getIdConteudoContima(){
        return $this->id_conteudo_contima;
    }
    public function getIdContima(){
        return $this->id_contima;
    }
    public function getIdImagemContima(){
        return $this->id_imagem_contima;
    }

}

?>