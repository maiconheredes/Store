<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 10/09/2016
 * Time: 10:33
 */
class mProdutos extends dbConnection{
    private $id_produto;
    private $ativo_produto;
    private $titulo_produto;
    private $descricao_produto;
    private $valor_produto;
    private $valorPromocao_produto;
    private $id_imagem_produto;

    /**
     * @return mixed
     */
    public function getIdProduto()
    {
        return $this->id_produto;
    }

    /**
     * @param mixed $id_produto
     */
    public function setIdProduto($id_produto)
    {
        $this->id_produto = $id_produto;
    }

    /**
     * @return mixed
     */
    public function getAtivoProduto()
    {
        return $this->ativo_produto;
    }

    /**
     * @param mixed $ativo_produto
     */
    public function setAtivoProduto($ativo_produto)
    {
        $this->ativo_produto = $ativo_produto;
    }

    /**
     * @return mixed
     */
    public function getTituloProduto()
    {
        return $this->titulo_produto;
    }

    /**
     * @param mixed $titulo_produto
     */
    public function setTituloProduto($titulo_produto)
    {
        $this->titulo_produto = $titulo_produto;
    }

    /**
     * @return mixed
     */
    public function getDescricaoProduto()
    {
        return $this->descricao_produto;
    }

    /**
     * @param mixed $descricao_produto
     */
    public function setDescricaoProduto($descricao_produto)
    {
        $this->descricao_produto = $descricao_produto;
    }

    /**
     * @return mixed
     */
    public function getValorProduto()
    {
        return $this->valor_produto;
    }

    /**
     * @param mixed $valor_produto
     */
    public function setValorProduto($valor_produto)
    {
        $this->valor_produto = $valor_produto;
    }

    /**
     * @return mixed
     */
    public function getValorPromocaoProduto()
    {
        return $this->valorPromocao_produto;
    }

    /**
     * @param mixed $valorPromocao_produto
     */
    public function setValorPromocaoProduto($valorPromocao_produto)
    {
        $this->valorPromocao_produto = $valorPromocao_produto;
    }

    /**
     * @return mixed
     */
    public function getIdImagemProduto()
    {
        return $this->id_imagem_produto;
    }

    /**
     * @param mixed $id_imagem_produto
     */
    public function setIdImagemProduto($id_imagem_produto)
    {
        $this->id_imagem_produto = $id_imagem_produto;
    }

}

?>