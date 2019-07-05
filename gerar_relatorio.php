<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>SYSDB</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<style>
	#h1edu2{
			margin-left:3%;
			margin-top: 30px;
			font-size: 2em;
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
		p{
			font-size: 1.2em;
			margin-left:3.3%;
		}
		#table_gerar{
		width:95%; margin-left:3%; margin-top:5px; "
		}
		
		#footer_gerar{
			background-color: #9dd0e7;
			text-align: center; 
			padding: 5px; 
			height: auto;
			margin-top: 600px;
		}
		 .but{
			  animation-duration: 0s;
		  }
		  .but:hover{
			  animation-duration: 0.7s;
			  animation-iteration-count: infinite;
		  }  
		
		.i_mov{
			  animation-duration: 1.3s;
			  animation-iteration-count: infinite;
		}
		@media screen and (max-width:500px){
			input[type=checkbox]{
			width: 20px;
			height: 15px;
		}
			#table_gerar{
				margin:0px; 
				width: 100%;
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
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];
        $turma = $_POST['turma'];	
try{
		$sql = $conecta->query('select id,nome,perfil,login,senha from usuario where login = "'.$login.'" and senha = md5("'.$senha.'")');
		$linha = $sql->fetch(PDO::FETCH_ASSOC);
		
		if($linha['perfil'] == "coordenador"){
			require("header_coord.php");
			require("body_gerarRelatorio.php");

		}

		if($linha['perfil'] == "secretaria"){
			require("header_secretaria.php");
			require("body_gerarRelatorio.php");

		}

		if($linha['perfil'] == "educador"){
			require("header_educador.php");
			require("body_gerarRelatorio.php");

		}
}
	catch (Exception $e) {
		echo 'Erro: ',  $e->getMessage(), "\n";
	}

    ?>
	
	<script>
	$(function(){

	$('button.mov').on('mouseover',function(){
		$('i.i_mov').addClass('animated slideInRight');
	});
	});
		
		function voltar(){
			location="relatorio.php";
		}
		 function ajuda(){
			 location="contato.php";
		 }
		
		
	</script>
</body>
</html>