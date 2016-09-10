<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 10/09/2016
 * Time: 10:52
 */
class mProdIma extends dbConnection{
    private $id_prodima;
    private $id_produto_prodima;
    private $id_imagem_prodima;

    /**
     * @return mixed
     */
    public function getIdProdima()
    {
        return $this->id_prodima;
    }

    /**
     * @param mixed $id_prodima
     */
    public function setIdProdima($id_prodima)
    {
        $this->id_prodima = $id_prodima;
    }

    /**
     * @return mixed
     */
    public function getIdProdutoProdima()
    {
        return $this->id_produto_prodima;
    }

    /**
     * @param mixed $id_produto_prodima
     */
    public function setIdProdutoProdima($id_produto_prodima)
    {
        $this->id_produto_prodima = $id_produto_prodima;
    }

    /**
     * @return mixed
     */
    public function getIdImagemProdima()
    {
        return $this->id_imagem_prodima;
    }

    /**
     * @param mixed $id_imagem_prodima
     */
    public function setIdImagemProdima($id_imagem_prodima)
    {
        $this->id_imagem_prodima = $id_imagem_prodima;
    }

}

?>