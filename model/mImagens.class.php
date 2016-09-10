<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 10/09/2016
 * Time: 10:11
 */
class mImagens extends dbConnection{
    private $id_imagem;
    private $url_imagem;
    private $legenda_imagem;

    /**
     * @return mixed
     */
    public function getIdImagem()
    {
        return $this->id_imagem;
    }

    /**
     * @param mixed $id_imagem
     */
    public function setIdImagem($id_imagem)
    {
        $this->id_imagem = $id_imagem;
    }

    /**
     * @return mixed
     */
    public function getUrlImagem()
    {
        return $this->url_imagem;
    }

    /**
     * @param mixed $url_imagem
     */
    public function setUrlImagem($url_imagem)
    {
        $this->url_imagem = $url_imagem;
    }

    /**
     * @return mixed
     */
    public function getLegendaImagem()
    {
        return $this->legenda_imagem;
    }

    /**
     * @param mixed $legenda_imagem
     */
    public function setLegendaImagem($legenda_imagem)
    {
        $this->legenda_imagem = $legenda_imagem;
    }

}

?>