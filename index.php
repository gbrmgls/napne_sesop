<html>
    <head>

        <title>Aplicativo Napne</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="imagem/png" href="imagens\cp2_ico.png">

  <style>
	#login-box{
		background-color:#11a6d4;
		width:480px;
		height:300px;
		margin:100px auto 0px;
		border-radius: 5px;
	}
	#login-box-interno{
		width:460px;
		height:280px;
		background-color:#fdfdfd;
		position:absolute;
		margin:10px;
		border-radius:5px;
		box-shadow:0px 5px 55px black;
		overflow:hidden;
	}
	#login-box-label{
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
	}
	.input-div{
		margin:20px;
		padding:5px;
		background-color:#f2f5f7;
		border-radius:3px;
	}
	.input-div input{
		width:410px;
		height:35px;
		padding-left:5px;
		font:normal 13px sans-serif;
		color:#666;
		border-radius:3px;
		border:1px solid #bfc4c6;
		outline:none;
	}
	.input-div:hover {
		background-color:#e0f1fc;
	}
	.input-div:hover input{
		border-color:#7dc6dd;
	}
	#input-senha{
		margin-top:-10px;
	}
	#botoes{
		width:410px;
		margin-left:26px;
	}
	[type~="submit"]{
		float:right;
		background-color:red;
		padding:5px 15px;
		font:bold 12px sans-serif;
		border-radius: 20px;
		text-shadow:0px 1px 0px white;
		border:1px solid #9eb9c3;
		background: rgb(205,229,238); /* Old browsers */
    background: -moz-linear-gradient(top, rgba(205,229,238,1) 0%, rgba(242,245,246,1) 0%, rgba(227,234,237,1) 25%, rgba(200,215,220,1) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgba(205,229,238,1) 0%,rgba(242,245,246,1) 0%,rgba(227,234,237,1) 25%,rgba(200,215,220,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgba(205,229,238,1) 0%,rgba(242,245,246,1) 0%,rgba(227,234,237,1) 25%,rgba(200,215,220,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cde5ee', endColorstr='#c8d7dc',GradientType=0 ); /* IE6-9 */
		color:#527988;
		box-shadow:0px 0px 10px #c9c9c9;
	}
		[type~="submit"]:hover{
		background: rgb(200,215,220); /* Old browsers */
    background: -moz-linear-gradient(top, rgba(200,215,220,1) 0%, rgba(227,234,237,1) 75%, rgba(242,245,246,1) 100%, rgba(205,229,238,1) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgba(200,215,220,1) 0%,rgba(227,234,237,1) 75%,rgba(242,245,246,1) 100%,rgba(205,229,238,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgba(200,215,220,1) 0%,rgba(227,234,237,1) 75%,rgba(242,245,246,1) 100%,rgba(205,229,238,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c8d7dc', endColorstr='#cde5ee',GradientType=0 ); /* IE6-9 */
	}
	#mostrar-senha{
		font:normal 12px sans-serif;
		margin: 23px;
        }
    </style>

    </head>
      <body background="imagens\2.jpg">
        <img src="imagens\cp2.png" alt="Colégio Pedro II - CSC" style = " width: 150px; height:150px; display:block; margin-left:auto; margin-right:auto ">
          <div align = "center" style="color:white">Colégio Pedro II - CSC I</div>
          <div id = "login-box">
    	     <div id= "login-box-interno">
        	  <div id="login-box-label">Login</div>
            <div class="input-div" id="input-usuario">
              <form method="post" action="Login.php">
                Matrícula:  <input type="text" name="matricula">
            </div>
            <div class="input-div" id="input-senha">
                CPF:  <input type="password" name="cpf">
            </div>
            <div id="botoes">
            <input type="submit" name="login" value="Login">
            </div>
            <div id="mostrar-senha"><input type="checkbox" name="showsenha"> Mostrar CPF </div>
         </div>
        </div>
      </form>
    </body>

</html>
