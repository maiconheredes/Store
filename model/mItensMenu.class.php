<?php
require_once "db/dbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: maico
 * Date: 10/09/2016
 * Time: 10:19
 */
class mItensMenu extends dbConnection{
    private $id_itensMenu;
    private $titulo_itensMenu;
    private $url_itensMenu;
    private $pai_itensMenu;
    private $id_menu_itensMenu;

    /**
     * @return mixed
     */
    public function getIdItensMenu()
    {
        return $this->id_itensMenu;
    }

    /**
     * @param mixed $id_itensMenu
     */
    public function setIdItensMenu($id_itensMenu)
    {
        $this->id_itensMenu = $id_itensMenu;
    }

    /**
     * @return mixed
     */
    public function getTituloItensMenu()
    {
        return $this->titulo_itensMenu;
    }

    /**
     * @param mixed $titulo_itensMenu
     */
    public function setTituloItensMenu($titulo_itensMenu)
    {
        $this->titulo_itensMenu = $titulo_itensMenu;
    }

    /**
     * @return mixed
     */
    public function getUrlItensMenu()
    {
        return $this->url_itensMenu;
    }

    /**
     * @param mixed $url_itensMenu
     */
    public function setUrlItensMenu($url_itensMenu)
    {
        $this->url_itensMenu = $url_itensMenu;
    }

    /**
     * @return mixed
     */
    public function getPaiItensMenu()
    {
        return $this->pai_itensMenu;
    }

    /**
     * @param mixed $pai_itensMenu
     */
    public function setPaiItensMenu($pai_itensMenu)
    {
        $this->pai_itensMenu = $pai_itensMenu;
    }

    /**
     * @return mixed
     */
    public function getIdMenuItensMenu()
    {
        return $this->id_menu_itensMenu;
    }

    /**
     * @param mixed $id_menu_itensMenu
     */
    public function setIdMenuItensMenu($id_menu_itensMenu)
    {
        $this->id_menu_itensMenu = $id_menu_itensMenu;
    }

}

?>