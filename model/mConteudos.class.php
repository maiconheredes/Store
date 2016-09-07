<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 07/09/2016
 * Time: 18:06
 */
class mConteudos extends dbConnection{
    private $id_conteudo;
    private $titulo_conteudo;
    private $descricao_conteudo;
    private $data_conteudo;

    public function setDataConteudo($data_conteudo){
        $this->data_conteudo = $data_conteudo;
    }
    public function setDescricaoConteudo($descricao_conteudo){
        $this->descricao_conteudo = $descricao_conteudo;
    }
    public function setIdConteudo($id_conteudo){
        $this->id_conteudo = $id_conteudo;
    }
    public function setTituloConteudo($titulo_conteudo){
        $this->titulo_conteudo = $titulo_conteudo;
    }

    public function getDataConteudo(){
        return $this->data_conteudo;
    }
    public function getDescricaoConteudo(){
        return $this->descricao_conteudo;
    }
    public function getIdConteudo(){
        return $this->id_conteudo;
    }
    public function getTituloConteudo(){
        return $this->titulo_conteudo;
    }

}

?>