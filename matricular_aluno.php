<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
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
			font-size: 1.4em;font-weight: 700;background-color:#9dd0e7; color:#fff;
		}
			
		#table_test{
		width:100%;
		margin: 0px;
		}
		.th_mbb{display:none;}
			
			#h4_tab{
			margin-top:5%; 
			margin-left:5%;
			font-family: 'timesnewroman';
			color: #9dd0e7;
			font-weight: 600;
			}
			
			#div_tb{
				width: 80%;
				margin-top:60px;
				padding: 20px;
				margin-left:10%;
				border: 1px solid #c9c9c9;
				border-radius: 6px;
			}
			
		#img_tb{
			position: absolute;
			z-index: 100;
			width: 14%;
			margin-top: 10px;
			margin-left: 120px;
			}
			
			#centerou_edu,#table_test1{display:none;}
			
			
		@media screen and (max-width:1366px){
			#div_tb{
				width: 90%;
				margin-top:60px;
				padding: 20px;
				margin-left:5%;
				border: 1px solid #c9c9c9;
				border-radius: 6px;
			}
			
		#img_tb{
			position: absolute;
			z-index: 100;
			width: 18%;
			margin-top: 10px;
			margin-left: 20px;
			}
			
		#centerou_edu{display:none;}
		}
		
		
		@media screen and (max-width:600px){
			#hr_tb{display:none;}
			
			#centerou_edu{
				width: 100%;
				padding-left: 1.3%;
				margin: 0px;

			}	

			#div2ou_edu,#div3ou_edu{
				width: 46.5%;

			}
			
			#table_test{
				width:100%;
				padding: 0px;
			}
			th,td{
				padding:0px;
				font-size: 1em;
				margin: 0px;
			}
			#div_tb{
				padding: 0px;
				margin: 0px;
				width:100%;
				border: 0px;
			}
			#h4_tab,p{margin: 0px; padding: 20px 0px 10px 0px; text-align: center; font-size: 1.6em;}
			p{padding:5px; text-align: justify;}
			#img_tb{display: none;}
		}
		@media screen and (max-width:440px){
			th,td{
				padding:0px;
				font-size: 0.8em;
				margin: 0px;
			}
			.th_ds{display:none;}
			.th_mbb{display:block;}
		}
		@media screen and (max-width:375px){
			th,td{
				padding:0px;
				font-size: 0.7em;
				margin: 0px;
			}
		}
		@media screen and (max-width:320px){
			th,td{
				padding:0px;
				font-size: 0.6em;
				margin: 0px;
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
	$matricula = $_POST['matricula'];
	$turma = $_POST['turma'];
	$data = date('Y-m-d');
	try{
		$consulta = $conecta->query('select id,nome,perfil,login,senha from usuario where login="' .$login.'" and senha=md5("'.$senha.'")');
		$linha = $consulta->fetch(PDO::FETCH_ASSOC);
		
		if($linha['perfil']=="coordenador"){
		require("header_coord.php");
		require("body_matricular_aluno.php");
		}
		if($linha['perfil']=="secretaria"){
		require("header_secretaria.php");
		require("body_matricular_aluno.php");
		}
	
	}
	catch (Exception $erro) {
			echo 'Erro: ', $erro->getMessage(), "\n";
	}
	?>
	<script>
	
		function voltar(){
			  location="nova_turma.php";
		  }
		
		function ajuda(){
			  location="contato.php";
		  }
		
	
	  
	
	</script>
			
</body>
</html>