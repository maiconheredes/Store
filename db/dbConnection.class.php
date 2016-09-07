<?php
require_once "config/cfStore.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 07/09/2016
 * Time: 16:14
 */
class dbConnection extends cfStore{
    private $host = 'astelnorte.com.br';
    private $dbname = 'astel196_Store';
    private $user = 'astel196';
    private $pass = 'kjkszpj130696';

    private function Connection(){
        $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        return $conn;
    }
    public function RunQuery($sql){
        $stm = $this->Connection()->prepare($sql);
        return $stm->execute();
    }
    public function RunSelect($sql){
        $stm = $this->Connection()->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>