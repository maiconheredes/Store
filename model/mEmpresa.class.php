<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 10/09/2016
 * Time: 10:05
 */
class mEmpresa extends dbConnection{
    private $id_empre;
    private $razaoSocial_empre;
    private $nomeFantasia_empre;
    private $endereco_empre;
    private $numero_empre;
    private $bairro_empre;
    private $id_cidade_empre;

    /**
     * @return mixed
     */
    public function getIdEmpre()
    {
        return $this->id_empre;
    }

    /**
     * @return mixed
     */
    public function getRazaoSocialEmpre()
    {
        return $this->razaoSocial_empre;
    }

    /**
     * @return mixed
     */
    public function getNomeFantasiaEmpre()
    {
        return $this->nomeFantasia_empre;
    }

    /**
     * @return mixed
     */
    public function getEnderecoEmpre()
    {
        return $this->endereco_empre;
    }

    /**
     * @return mixed
     */
    public function getNumeroEmpre()
    {
        return $this->numero_empre;
    }

    /**
     * @return mixed
     */
    public function getBairroEmpre()
    {
        return $this->bairro_empre;
    }

    /**
     * @return mixed
     */
    public function getIdCidadeEmpre()
    {
        return $this->id_cidade_empre;
    }

}

?>