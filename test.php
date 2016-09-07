<?php
 require_once "db/dbConnection.class.php";
 $data = new dbConnection();
 $sql = "INSERT INTO empresa(
          razaoSocial_empre,
          nomeFantasia_empre,
          endereco_empre,
          numero_empre,
          bairro_empre,
          id_cidade_empre) VALUES(
          'teste',
          'teste',
          'teste',
          'teste',1)";
 $data->RunQuery($sql);
?>