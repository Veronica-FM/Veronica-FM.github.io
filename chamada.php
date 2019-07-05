<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>SYSDB</title>
	<style>
	
		input[type=checkbox]{
			width: 27px;
			height: 20px;
		}
		
		#h1edu2{
			margin-left:3%;
			margin-top: 30px;
			font-size: 2.5em;
			font-family: 'timesnewroman';
			color: #9dd0e7;
			margin-bottom: -5px;
		}
		
		td{
			font-size:1.3em;
			text-align: center;
			font-weight: 400;
			
		}
		th{
			font-size: 1.4em;
			font-weight: 700;
			background-color:#9dd0e7; 
			color:#fff;
		}
		
	
		
		@media screen and (max-width:500px){
			input[type=checkbox]{
			width: 20px;
			height: 15px;
		}
		}
		
		
	</style>
</head>

<body>
	<?php

		session_start();
		require("conexao.php");
		$login = $_SESSION['login'];
		$senha = $_SESSION['senha'];
		$turma = $_POST['turma'];
	
	try{
		$sql = $conecta->query('select id,nome,perfil,login,senha from usuario where login = "'.$login.'" and senha = md5("'.$senha.'")');
		$linha = $sql->fetch(PDO::FETCH_ASSOC);
	
		if($linha['perfil'] == "educador"){
			require("header_educador.php");
			require("body_chamada.php");

		}
	}
	catch (Exception $erro) {
	echo 'Erro: ', $erro->getMessage(), "\n";
	}
	?>
</body>
</html>