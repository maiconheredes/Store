<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 07/09/2016
 * Time: 18:11
 */
class mDestaque extends dbConnection{
    private $id_destaque;
    private $titulo_destaque;
    private $time_destaque;
    private $width_destaque;
    private $height_destaque;
    private $id_empre_destaque;

    /**
     * @return mixed
     */
    public function getTituloDestaque()
    {
        return $this->titulo_destaque;
    }

    /**
     * @param mixed $titulo_destaque
     */
    public function setTituloDestaque($titulo_destaque)
    {
        $this->titulo_destaque = $titulo_destaque;
    }

    /**
     * @return mixed
     */
    public function getTimeDestaque()
    {
        return $this->time_destaque;
    }

    /**
     * @param mixed $time_destaque
     */
    public function setTimeDestaque($time_destaque)
    {
        $this->time_destaque = $time_destaque;
    }

    /**
     * @return mixed
     */
    public function getWidthDestaque()
    {
        return $this->width_destaque;
    }

    /**
     * @param mixed $width_destaque
     */
    public function setWidthDestaque($width_destaque)
    {
        $this->width_destaque = $width_destaque;
    }

    /**
     * @return mixed
     */
    public function getHeightDestaque()
    {
        return $this->height_destaque;
    }

    /**
     * @param mixed $height_destaque
     */
    public function setHeightDestaque($height_destaque)
    {
        $this->height_destaque = $height_destaque;
    }

    /**
     * @return mixed
     */
    public function getIdEmpreDestaque()
    {
        return $this->id_empre_destaque;
    }

    /**
     * @param mixed $id_empre_destaque
     */
    public function setIdEmpreDestaque($id_empre_destaque)
    {
        $this->id_empre_destaque = $id_empre_destaque;
    }

    /**
     * @return mixed
     */
    public function getIdDestaque()
    {
        return $this->id_destaque;
    }

    /**
     * @param mixed $id_destaque
     */
    public function setIdDestaque($id_destaque)
    {
        $this->id_destaque = $id_destaque;
    }

}

?>