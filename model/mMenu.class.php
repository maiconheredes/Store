<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 10/09/2016
 * Time: 10:23
 */
class mMenu extends dbConnection{
    private $id_menu;
    private $titulo_menu;
    private $id_empre_menu;

    /**
     * @return mixed
     */
    public function getIdMenu()
    {
        return $this->id_menu;
    }

    /**
     * @param mixed $id_menu
     */
    public function setIdMenu($id_menu)
    {
        $this->id_menu = $id_menu;
    }

    /**
     * @return mixed
     */
    public function getTituloMenu()
    {
        return $this->titulo_menu;
    }

    /**
     * @param mixed $titulo_menu
     */
    public function setTituloMenu($titulo_menu)
    {
        $this->titulo_menu = $titulo_menu;
    }

    /**
     * @return mixed
     */
    public function getIdEmpreMenu()
    {
        return $this->id_empre_menu;
    }

    /**
     * @param mixed $id_empre_menu
     */
    public function setIdEmpreMenu($id_empre_menu)
    {
        $this->id_empre_menu = $id_empre_menu;
    }

}

?>