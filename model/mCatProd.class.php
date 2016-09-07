<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 07/09/2016
 * Time: 17:55
 */
class mCatProd extends dbConnection{
    private $id_catprod;
    private $id_categoria_catprod;
    private $id_produto_catprod;

    public function setIdCategoriaCatprod($id_categoria_catprod){
        $this->id_categoria_catprod = $id_categoria_catprod;
    }
    public function setIdCatprod($id_catprod){
        $this->id_catprod = $id_catprod;
    }
    public function setIdProdutoCatprod($id_produto_catprod){
        $this->id_produto_catprod = $id_produto_catprod;
    }

    public function getIdCategoriaCatprod(){
        return $this->id_categoria_catprod;
    }
    public function getIdProdutoCatprod(){
        return $this->id_produto_catprod;
    }
    public function getIdCatprod(){
        return $this->id_catprod;
    }

}

?>