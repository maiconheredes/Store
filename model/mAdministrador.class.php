<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maicon
 * Date: 07/09/2016
 * Time: 17:36
 */
class mAdministrador extends dbConnection{
    private $id_admin;
    private $nome_admin;
    private $usuario_admin;
    private $email_admin;
    private $senha_admin;
    private $id_empre_admin;

    public function setIdAdmin($id_admin){
        $this->id_admin = $id_admin;
    }
    public function setNomeAdmin($nome_admin){
        $this->nome_admin = $nome_admin;
    }
    public function setUsuarioAdmin($usuario_admin){
        $this->usuario_admin = $usuario_admin;
    }
    public function setEmailAdmin($email_admin){
        $this->email_admin = $email_admin;
    }
    public function setSenhaAdmin($senha_admin){
        $this->senha_admin = $senha_admin;
    }
    public function setIdEmpreAdmin($id_empre_admin){
        $this->id_empre_admin = $id_empre_admin;
    }

    public function getIdAdmin(){
        return $this->id_admin;
    }
    public function getNomeAdmin(){
        return $this->nome_admin;
    }
    public function getUsuarioAdmin(){
        return $this->usuario_admin;
    }
    public function getEmailAdmin(){
        return $this->email_admin;
    }
    public function getSenhaAdmin(){
        return $this->senha_admin;
    }
    public function getIdEmpreAdmin(){
        return $this->id_empre_admin;
    }

}

?>