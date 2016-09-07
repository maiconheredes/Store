<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 07/09/2016
 * Time: 17:52
 */
class mCatCont extends dbConnection{
    private $id_catcont;
    private $id_categoria_catcont;
    private $id_conteudo_catcont;

    public function setIdCatcont($id_catcont){
        $this->id_catcont = $id_catcont;
    }
    public function setIdCategoriaCatcont($id_categoria_catcont){
        $this->id_categoria_catcont = $id_categoria_catcont;
    }
    public function setIdConteudoCatcont($id_conteudo_catcont){
        $this->id_conteudo_catcont = $id_conteudo_catcont;
    }

    public function getIdCatcont(){
        return $this->id_catcont;
    }
    public function getIdCategoriaCatcont(){
        return $this->id_categoria_catcont;
    }
    public function getIdConteudoCatcont(){
        return $this->id_conteudo_catcont;
    }

}

?>