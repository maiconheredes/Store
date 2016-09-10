<?php
require_once "model/mAdministrador.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 10/09/2016
 * Time: 17:37
 */
class aAdministrador extends mAdministrador{
    protected $sqlInsert = "INSERT INTO administrador(
                              nome_admin,
                              usuario_admin,
                              email_admin,
                              senha_admin,
                              id_empre_admin) VALUES(
                              '%s', '%s', '%s', '%s', '%s') ";
    protected $sqlUpdade = "UPDATE administrador SET
                              nome_admin='%s',
                              usuario_admin='%s',
                              email_admin='%s',
                              senha_admin='%s',
                              id_empre_admin='%s'
                              WHERE id_admin = '%s' ";
    protected $sqlSelect = "SELECT * FROM administrador WHERE 1=1 %s %s ";
    protected $sqlDelete = "DELETE FROM administrador WHERE id_admin=%s ";

    public function insert(){
        $sql = sprintf($this->sqlInsert,
            $this->getNomeAdmin(),
            $this->getUsuarioAdmin(),
            $this->getEmailAdmin(),
            $this->getSenhaAdmin(),
            $this->getIdEmpreAdmin()
        );
        return $this->RunQuery($sql);
    }
    public function update(){
        $sql = sprintf($this->sqlUpdade,
            $this->getNomeAdmin(),
            $this->getUsuarioAdmin(),
            $this->getEmailAdmin(),
            $this->getSenhaAdmin(),
            $this->getIdEmpreAdmin(),
            $this->getIdAdmin()
        );
        return $this->RunQuery($sql);
    }
    public function delete(){
        $sql = sprintf($this->sqlDelete, $this->getIdAdmin());
        return $this->RunQuery($sql);
    }
    public function select($where='', $order=''){
        $sql = sprintf($this->sqlSelect, $where, $order);
        return $this->RunSelect($sql);
    }
    public function load(){
        $rs = $this->select(sprintf("AND id_admin='%s' ", $this->getIdAdmin()));
        $this->setEmailAdmin($rs[0]['email_admin']);
        $this->setNomeAdmin($rs[0]['nome_admin']);
        $this->setUsuarioAdmin($rs[0]['usuario_admin']);
        $this->setSenhaAdmin($rs[0]['senha_admin']);
        $this->setIdAdmin($rs[0]['id_admin']);
        $this->setIdEmpreAdmin($rs[0]['id_empre_admin']);
        return $this;
    }

}

?>