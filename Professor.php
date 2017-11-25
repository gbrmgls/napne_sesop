<?php

  include_once "bd.php";

  $BD = new BD;
  $BD->comando("INSERT INTO login VALUES('".$_POST["matricula"]."', '".$_POST["cpf"]."')");
  header("Location: cadastro_efetuado_professor.php");
 ?>
