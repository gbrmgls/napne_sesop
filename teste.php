<?php

  include_once "bd.php";

  $BD = new BD;
  $retorno = $BD->comando("SELECT * FROM aluno");
  $dados = array();
  while($dados[] = $retorno->fetch_assoc()){};

  $count = count($dados);
  for($i = 0; $i < $count; $i++)
  {
    print_r($dados[$i]["matricula"]);
    echo "<br>";
  }
?>
