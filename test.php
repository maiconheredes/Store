<?php
 require_once "config/cfStore.class.php";
 $data = new cfStore();
 echo $data->dateToBR("2016-10-25");
 echo $data->dateToUS("25/10/2500");
?>