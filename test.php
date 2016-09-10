<?php
 require_once "actions/aAdministrador.class.php";
 $data = new aAdministrador();
 $data->setIdAdmin(1);
 $data->load();
 $data->setEmailAdmin("maiconheredes@hotmail.com");
 $data->update();
?>