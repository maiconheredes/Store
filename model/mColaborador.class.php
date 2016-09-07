<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 07/09/2016
 * Time: 18:01
 */
class mColaborador extends dbConnection{
    private $id_colab;
    private $nome_colab;
    private $usuario_colab;
    private $email_colab;
    private $senha_colab;
    private $id_empre_colab;

    public function setEmailColab($email_colab){
        $this->email_colab = $email_colab;
    }
    public function setIdColab($id_colab){
        $this->id_colab = $id_colab;
    }
    public function setIdEmpreColab($id_empre_colab){
        $this->id_empre_colab = $id_empre_colab;
    }
    public function setNomeColab($nome_colab){
        $this->nome_colab = $nome_colab;
    }
    public function setSenhaColab($senha_colab){
        $this->senha_colab = $senha_colab;
    }
    public function setUsuarioColab($usuario_colab){
        $this->usuario_colab = $usuario_colab;
    }

    public function getEmailColab(){
        return $this->email_colab;
    }
    public function getIdColab(){
        return $this->id_colab;
    }
    public function getIdEmpreColab(){
        return $this->id_empre_colab;
    }
    public function getNomeColab(){
        return $this->nome_colab;
    }
    public function getUsuarioColab(){
        return $this->usuario_colab;
    }
    public function getSenhaColab(){
        return $this->senha_colab;
    }

}

?>