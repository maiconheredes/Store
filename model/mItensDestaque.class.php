<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 10/09/2016
 * Time: 10:13
 */
class mItensDestaque extends dbConnection{
    private $id_itensDestaque;
    private $titulo_itensDestaque;
    private $descricao_itensDestaque;
    private $url_itensDestaque;
    private $id_destaque_itensDestaque;

    /**
     * @return mixed
     */
    public function getIdItensDestaque()
    {
        return $this->id_itensDestaque;
    }

    /**
     * @param mixed $id_itensDestaque
     */
    public function setIdItensDestaque($id_itensDestaque)
    {
        $this->id_itensDestaque = $id_itensDestaque;
    }

    /**
     * @return mixed
     */
    public function getTituloItensDestaque()
    {
        return $this->titulo_itensDestaque;
    }

    /**
     * @param mixed $titulo_itensDestaque
     */
    public function setTituloItensDestaque($titulo_itensDestaque)
    {
        $this->titulo_itensDestaque = $titulo_itensDestaque;
    }

    /**
     * @return mixed
     */
    public function getDescricaoItensDestaque()
    {
        return $this->descricao_itensDestaque;
    }

    /**
     * @param mixed $descricao_itensDestaque
     */
    public function setDescricaoItensDestaque($descricao_itensDestaque)
    {
        $this->descricao_itensDestaque = $descricao_itensDestaque;
    }

    /**
     * @return mixed
     */
    public function getUrlItensDestaque()
    {
        return $this->url_itensDestaque;
    }

    /**
     * @param mixed $url_itensDestaque
     */
    public function setUrlItensDestaque($url_itensDestaque)
    {
        $this->url_itensDestaque = $url_itensDestaque;
    }

    /**
     * @return mixed
     */
    public function getIdDestaqueItensDestaque()
    {
        return $this->id_destaque_itensDestaque;
    }

    /**
     * @param mixed $id_destaque_itensDestaque
     */
    public function setIdDestaqueItensDestaque($id_destaque_itensDestaque)
    {
        $this->id_destaque_itensDestaque = $id_destaque_itensDestaque;
    }

}

?>