<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 07/09/2016
 * Time: 18:15
 */
class mDestIma extends dbConnection{
    private $id_destima;
    private $id_itensDestaque_destima;
    private $id_imagem_destima;

    /**
     * @return mixed
     */
    public function getIdDestima()
    {
        return $this->id_destima;
    }

    /**
     * @param mixed $id_destima
     */
    public function setIdDestima($id_destima)
    {
        $this->id_destima = $id_destima;
    }

    /**
     * @return mixed
     */
    public function getIdItensDestaqueDestima()
    {
        return $this->id_itensDestaque_destima;
    }

    /**
     * @param mixed $id_itensDestaque_destima
     */
    public function setIdItensDestaqueDestima($id_itensDestaque_destima)
    {
        $this->id_itensDestaque_destima = $id_itensDestaque_destima;
    }

    /**
     * @return mixed
     */
    public function getIdImagemDestima()
    {
        return $this->id_imagem_destima;
    }

    /**
     * @param mixed $id_imagem_destima
     */
    public function setIdImagemDestima($id_imagem_destima)
    {
        $this->id_imagem_destima = $id_imagem_destima;
    }

}

?>