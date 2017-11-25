<?php
  require_once "authorize.php";
 ?>

<html>


    <head>
        <title>Aplicativo Napne</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="imagem/png" href="imagens\cp2_ico.png">
        <style>
        [type~="text"]{
          border-radius:10px;
          text-align: center;
          text-transform: uppercase;
        }
        [type~="date"]
        {
          border-radius: 10px;
        }
        [type~="checkbox"]{
          border-radius: 3px;
          height: 16px;
        }
        [type~="number"]{
          border-radius: 10px;
          size: 8;
        }
        [type~="submit"], [type~="button"]
        {
          border-radius: 10px;
          border-color: gray;
          margin-left: 1000px;
        }
        #cad{
          background-color:#11a6d4;
      		width:1200px;
      		height:500px;
      		margin:10px auto 0px;
      		border-radius: 5px;
        }
        select{
          border-radius:10px;
          padding-left:10px;
        }
        #cad-interno{
      		width:1180px;
      		height:480px;
          background: rgb(242,245,246); /* Old browsers */
          background: -moz-linear-gradient(top, rgba(242,245,246,1) 0%, rgba(242,245,246,1) 0%, rgba(227,234,237,1) 25%, rgba(200,215,220,1) 100%); /* FF3.6-15 */
          background: -webkit-linear-gradient(top, rgba(242,245,246,1) 0%,rgba(242,245,246,1) 0%,rgba(227,234,237,1) 25%,rgba(200,215,220,1) 100%); /* Chrome10-25,Safari5.1-6 */
          background: linear-gradient(to bottom, rgba(242,245,246,1) 0%,rgba(242,245,246,1) 0%,rgba(227,234,237,1) 25%,rgba(200,215,220,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f5f6', endColorstr='#c8d7dc',GradientType=0 ); /* IE6-9 */
      		position:absolute;
      		margin:10px;
      		border-radius:5px;
      		box-shadow:0px 5px 55px black;
      		overflow:hidden;}

          #botao_cadastrar
          {
            border-radius:10px;
          }

        #cad-box-label{
        		height:45px;
        		text-align:center;
        		font:bold 16px/45px sans-serif;
        		border-top-left-radius:5px;
        		border-top-right-radius:5px;
        		background: rgb(242,245,246); /* Old browsers */
            background: -moz-linear-gradient(top, rgba(242,245,246,1) 0%, rgba(242,245,246,1) 0%, rgba(227,234,237,1) 25%, rgba(200,215,220,1) 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(top, rgba(242,245,246,1) 0%,rgba(242,245,246,1) 0%,rgba(227,234,237,1) 25%,rgba(200,215,220,1) 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to bottom, rgba(242,245,246,1) 0%,rgba(242,245,246,1) 0%,rgba(227,234,237,1) 25%,rgba(200,215,220,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f5f6', endColorstr='#c8d7dc',GradientType=0 ); /* IE6-9 */
        		border-bottom:1px solid #bfc3c5;
        		box-shadow:1px 0px 2px black;
        		text-shadow:1px 0px 1px white;

        select
        {
          border-radius:10px;
        }
        p{
          margin-top: 0;
        }
        </style>

    </head>


    <body background="imagens\2.jpg">
        <img src="imagens\cp2.png" alt="Colégio Pedro II - CSC" style = " width: 150px; height:150px; display:block; margin-left:auto; margin-right:auto ">
        <div align = "center" style="color:white">Colégio Pedro II - CSC I</div><br/><br/><br/><br/><br/><br/><br/>
        <div id = "cad">
            <div id="cad-interno">
              <div id="cad-box-label">Consulta de Aluno(a)</div><br>

                            <!-- INICIO DATAGRID  tr = linha,   th = coluna -->
                            <!-- CRIA A MATRIZ DE DADOS DA TABELA ALUNOS -->
                            <?php include_once "bd.php";

                            $BD = new BD;
                            $retorno = $BD->comando("SELECT * FROM aluno");
                            $dados = array();
                            while($dados[] = $retorno->fetch_assoc()){};

                            $count = count($dados);
                            ?>
    <table role="grid"
       aria-labelledby="grid2Label"
       class="data">
    <tbody>
      <tr>
        <th aria-sort="ascending">
          <span tabindex="-1">
            &nbsp   Matrícula   &nbsp
            <?php
            for($i = 0; $i < $count; $i++)
            {
              print_r($dados[$i]["matricula"]);
              echo "<br>";
            }
            ?>
          </span>
        </th>
        <th tabindex="-1">
          Nome   &nbsp
          <?php
          for($i = 0; $i < $count; $i++)
          {
            print_r($dados[$i]["nome"]);
            echo "<br>";
          }
          ?>
        </th>
        <th tabindex="-1">
          Data de Nascimento   &nbsp
          <?php
          for($i = 0; $i < $count; $i++)
          {
            print_r($dados[$i]["data_nasc"]);
            echo "<br>";
          }
          ?>
        </th>
        <th tabindex="-1">
          PA   &nbsp
          <?php
          for($i = 0; $i < $count; $i++)
          {
            print_r($dados[$i]["pa"]);
            echo "<br>";
          }
          ?>
        </th>
        <th tabindex="-1">
          NPA   &nbsp
          <?php
          for($i = 0; $i < $count; $i++)
          {
            print_r($dados[$i]["npa"]);
            echo "<br>";
          }
          ?>
        </th>

        <!-- SRM -->
        <th tabindex="-1">
          SRM:   &nbsp
          <?php
          for($i = 0; $i < $count; $i++)
          {
            print_r($dados[$i]["srm"]);
            echo "<br>";
          }
          ?>
        </th>
        <th tabindex="-1">
          AEE   &nbsp
          <?php
          for($i = 0; $i < $count; $i++)
          {
            print_r($dados[$i]["aee"]);
            echo "<br>";
          }
          ?>
        </th>
        <th tabindex="-1">
          Complementar  &nbsp
          <?php
          for($i = 0; $i < $count; $i++)
          {
            print_r($dados[$i]["comp"]);
            echo "<br>";
          }
          ?>
        </th>
        <th tabindex="-1">
          Suplementar  &nbsp
          <?php
          for($i = 0; $i < $count; $i++)
          {
            print_r($dados[$i]["sup"]);
            echo "<br>";
          }
          ?>
        </th>
        <th tabindex="-1">
          AProj. Ações Inter.  &nbsp
          <?php
          for($i = 0; $i < $count; $i++)
          {
            print_r($dados[$i]["pai"]);
            echo "<br>";
          }
          ?>
        </th>
        <th tabindex="-1">
          PE  &nbsp
          <?php
          for($i = 0; $i < $count; $i++)
          {
            print_r($dados[$i]["pe"]);
            echo "<br>";
          }
          ?>
        </th>

        <!-- lA -->
        <th tabindex="-1">
          LA:  &nbsp
          <?php
          for($i = 0; $i < $count; $i++)
          {
            print_r($dados[$i]["la"]);
            echo "<br>";
          }
          ?>
        </th>
        <th tabindex="-1">
          OJ  &nbsp
          <?php
          for($i = 0; $i < $count; $i++)
          {
            print_r($dados[$i]["oj"]);
            echo "<br>";
          }
          ?>
        </th>
        <th tabindex="-1">
          OL  &nbsp
          <?php
          for($i = 0; $i < $count; $i++)
          {
            print_r($dados[$i]["oc"]);
            echo "<br>";
          }
          ?>
        </th>
        <th tabindex="-1">
          PROJ. CS  &nbsp
          <?php
          for($i = 0; $i < $count; $i++)
          {
            print_r($dados[$i]["pcc"]);
            echo "<br>";
          }
          ?>
        </th>
        <th tabindex="-1">
          LA P.
          <?php
          for($i = 0; $i < $count; $i++)
          {
            print_r($dados[$i]["lap"]);
            echo "<br>";
          }
          ?>
        </th>


    </tbody>
  </table>
  <p>
  <a href="index.php"><input type="button" name="sair" value="Sair"></a><br><br>
  <a href="cadastro_aluno.php"><input type="button" name="cadastrar" value="Cadastrar mais alunos"></a>

        </div>
          </div>
            </div>
              </div>
    </body>
</html>
