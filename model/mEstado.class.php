<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 10/09/2016
 * Time: 10:08
 */
class mEstado extends dbConnection{
    private $id_est;
    private $nome_est;
    private $sigla_est;

    /**
     * @return mixed
     */
    public function getIdEst()
    {
        return $this->id_est;
    }

    /**
     * @param mixed $id_est
     */
    public function setIdEst($id_est)
    {
        $this->id_est = $id_est;
    }

    /**
     * @return mixed
     */
    public function getNomeEst()
    {
        return $this->nome_est;
    }

    /**
     * @param mixed $nome_est
     */
    public function setNomeEst($nome_est)
    {
        $this->nome_est = $nome_est;
    }

    /**
     * @return mixed
     */
    public function getSiglaEst()
    {
        return $this->sigla_est;
    }

    /**
     * @param mixed $sigla_est
     */
    public function setSiglaEst($sigla_est)
    {
        $this->sigla_est = $sigla_est;
    }

}

?>