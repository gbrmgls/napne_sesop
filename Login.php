<?php

  include_once "bd.php";

  $BD = new BD;
  $retorno = $BD->comando("SELECT * FROM login WHERE login = '".$_POST["matricula"]."' AND senha = '".$_POST["cpf"]."'");
  $dados = $retorno->fetch_assoc();
  if($_POST["matricula"] == "root" && $_POST["cpf"] == "toor")
  {
    header("Location: cadastro_professor.php");
  }
  else if($dados["login"] == $_POST["matricula"] && $dados["senha"] == $_POST["cpf"])
  {
    header("Location: cadastro_aluno.php");
  }

?>
