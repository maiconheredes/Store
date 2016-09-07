<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 07/09/2016
 * Time: 17:48
 */
class mCategoria extends dbConnection{
    private $id_categoria;
    private $codigo_categoria;
    private $titulo_categoria;
    private $pai_categoria;
    private $id_empre_categoria;
    private $id_modulo_categoria;

    public function setCodigoCategoria($codigo_categoria){
        $this->codigo_categoria = $codigo_categoria;
    }
    public function setIdCategoria($id_categoria){
        $this->id_categoria = $id_categoria;
    }
    public function setIdEmpreCategoria($id_empre_categoria){
        $this->id_empre_categoria = $id_empre_categoria;
    }
    public function setIdModuloCategoria($id_modulo_categoria){
        $this->id_modulo_categoria = $id_modulo_categoria;
    }
    public function setPaiCategoria($pai_categoria){
        $this->pai_categoria = $pai_categoria;
    }
    public function setTituloCategoria($titulo_categoria){
        $this->titulo_categoria = $titulo_categoria;
    }

    public function getCodigoCategoria(){
        return $this->codigo_categoria;
    }
    public function getIdCategoria(){
        return $this->id_categoria;
    }
    public function getIdEmpreCategoria(){
        return $this->id_empre_categoria;
    }
    public function getIdModuloCategoria(){
        return $this->id_modulo_categoria;
    }
    public function getPaiCategoria(){
        return $this->pai_categoria;
    }
    public function getTituloCategoria(){
        return $this->titulo_categoria;
    }

}

?>