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
        [type~="submit"],[type~="button"]
        {
          border-radius: 10px;
          border-color: gray;
          margin-left: 650px;
        }
        #cad{
          background-color:#11a6d4;
      		width:800px;
      		height:500px;
      		margin:10px auto 0px;
      		border-radius: 5px;
        }
        select{
          border-radius:10px;
          padding-left:10px;
        }
        #cad-interno{
      		width:780px;
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

        <script language=Javascript>
             function isNumberKey(evt)
             {
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode != 46 && charCode > 31
                  && (charCode < 48 || charCode > 57))
                   return false;

                return true;
             }

             function myFunction()
             {
               //checa o valor do radio do SRM/LA
               var elements = document.getElementsByName("srmla");
               for (var i = 0, l = elements.length; i < l; i++)
               {
                 if (elements[i].checked)
                 {
                   if(elements[i].value == 1)
                   {
                     document.getElementById("opcoes").innerHTML = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"+

                          "<input type='checkbox' name='aee' value='aee'>Atendimento Educacional Especial(AEE) <br>"+

                          "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"+

                          "<input type='radio' name='suplcompl' value='compl'>Complementar &nbsp"+

                          "<input type='radio' name='suplcompl' value='supl'>Suplementar <br>"+

                          "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"+

                          "<input type='checkbox' name='apai' value='apai'>Aulas do Projeto Ações Interdisciplinares <br>"+

                          "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"+

                          "<input type='checkbox' name='pe' value='pe'>Projetos Extras";
                   }
                   else if(elements[i].value == 2)
                   {
                     document.getElementById("opcoes").innerHTML = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"+

                         "<input type='checkbox' name='oj' value='oj'>Oficina de Jogos <p>"+

                         "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"+

                         "<input type='checkbox' name='ol' value='ol'>Oficina de Linguagem <p>"+

                         "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"+

                         "<input type='checkbox' name='pcc' value='pcc'>Projeto Clube de Ciências <p>"+

                         "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"+

                         "<input type='checkbox' name='lap' value='lap'>L.A. Padrão <p>";
                   }
                 }
               }
             }

        </script>

    </head>


    <body background="imagens\2.jpg">
        <img src="imagens\cp2.png" alt="Colégio Pedro II - CSC" style = " width: 150px; height:150px; display:block; margin-left:auto; margin-right:auto ">
        <div align = "center" style="color:white">Colégio Pedro II - CSC I</div><br/><br/><br/><br/><br/><br/><br/>
        <div id = "cad">
            <div id="cad-interno">
              <div id="cad-box-label">Cadastro de Aluno(a)</div><br>
          <div id="formulario" align="justify">


        <!-- Formulário -->
        <form name="form1" method="POST" action="Aluno.php" enctype="multipart/form-data">

            &nbsp&nbsp&nbsp Matrícula: <input type="text" name="matricula" maxlength="8" size="10" onkeypress="return isNumberKey(event)" value="<?php if(isset($_POST['matricula'])) echo $_POST['matricula'];?>">

            &nbsp&nbsp

            Nome: <input type="text" size="50" name="nome" value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>"> <p>

            &nbsp&nbsp

            Data nascimento: <input type="date" name="data_nasc" value="<?php if(isset($_POST['data_nasc'])) echo $_POST['data_nasc'];?>">

            &nbsp&nbsp

            Documentos: <input type="file" name="laudo">


        <p>
            &nbsp&nbsp&nbsp <input type="checkbox" name="pa" value="pa" <?php if(isset($_POST['pa'])) echo "checked";?>> Público Alvo
            &nbsp&nbsp&nbsp <input type="checkbox" name="npa" value="npa" <?php if(isset($_POST['npa'])) echo "checked";?>> Não Público Alvo
        </p>

        <p>
            &nbsp&nbsp&nbsp <input type="radio" id="srmla" name="srmla" onchange="myFunction()" value=1> Sala de Recursos Multifuncionais (SRM) &nbsp&nbsp&nbsp
            <input type="radio"  id="srmla" name="srmla" onchange="myFunction()"  value=2> Laboratório de Aprendizagem (LA)
        <p>

        <p id="opcoes"></p>



       <input type="submit" name="cadastrar" value="Cadastrar"><br><br>
       <a href="index.php"><input type="button" name="sair" value="sair"></a><br><br>
       <a href="consulta_alunos.php"><input type="button" name="consulta" value="Consultar"></a>
      </form>
      <!-- Fim do formulário 1 -->

        </div>
          </div>
            </div>
              </div>
    </body>
</html>
