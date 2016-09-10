<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 10/09/2016
 * Time: 10:31
 */
class mModulos extends dbConnection{
    private $id_modulo;
    private $nome_modulo;

    /**
     * @return mixed
     */
    public function getIdModulo()
    {
        return $this->id_modulo;
    }

    /**
     * @param mixed $id_modulo
     */
    public function setIdModulo($id_modulo)
    {
        $this->id_modulo = $id_modulo;
    }

    /**
     * @return mixed
     */
    public function getNomeModulo()
    {
        return $this->nome_modulo;
    }

    /**
     * @param mixed $nome_modulo
     */
    public function setNomeModulo($nome_modulo)
    {
        $this->nome_modulo = $nome_modulo;
    }

}

?>