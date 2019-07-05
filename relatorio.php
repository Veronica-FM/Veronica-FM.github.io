<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>SYSDB</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<style>

		#h1edu2{
			margin-top: 30px;
			font-size: 2.2em;
			font-family: 'timesnewroman';
			color: #9dd0e7;
			text-align: center;
		}
		
		
		
		#divform_rela{
			width:75%;
			border: 1px solid #c9c9c9;
			border-radius: 5px;
			padding: 20px;
			margin-left: 12%;
		}
		
		#centerou_edu{
		width: 100%;
		padding-left: 16.3%;
		margin-top: 1%;
		margin-bottom: 1%;	
		
	}	
		
	#div2ou_edu,#div3ou_edu{
		width: 40%;
		
	}
		
		#h4rela{
			font-family: 'timesnewroman';
			color: #9dd0e7;
			text-align: center;
			margin-top:-10px; 
			font-size:1.7em; 
			margin-bottom: 20px;
		}
		#imgrela{
				width: 80px;
			margin-top: -10px;
			}
	
		.but{
			  animation-duration: 0s;
		  }
		  .but:hover{
			  animation-duration: 0.7s;
			  animation-iteration-count: infinite;
		  }  
		@media screen and (max-width:1366px){
		#divform_rela{
			width:70%;
			border: 1px solid #c9c9c9;
			border-radius: 5px;
			padding: 25;
			margin-left: 13%;
		}
				#divform_edu{
		margin-left: 15.4%;
		width: 70%;
		padding: 0px;
		border: 1px solid #c9c9c9;
		padding: 30px;
		border-radius: 5px;
	}
		
	#centerou_edu{
		width: 100%;
		padding-left: 13.3%;
		margin-top: 1%;
		margin-bottom: 1%;	
		
	}	
		
	#div2ou_edu,#div3ou_edu{
		width: 40%;
		
	}
	}
		@media screen and (max-width:800px){
			#divform_rela{
			width:90%;
			border: 1px solid #c9c9c9;
			border-radius: 5px;
			padding: 25;
			margin-left: 5%;
		}
		}
		@media screen and (max-width:419px){
			#h1edu2{
			font-size: 2em;
		}
		}
		@media screen and (max-width:388px){
			#h1edu2{
			font-size: 1.8em;
		}
			#h4rela{
			margin-top:-15px; 
			font-size:1.5em; 
		}
		
		@media screen and (max-width:357px){
			#h1edu2{
			font-size: 1.7em;
		}
			#imgrela{
				width: 60px;
			}
			#h4rela{
			margin-top:-5px; 
			font-size:1.5em; 
		}
		}
		
			@media screen and (max-width:320px){
			#h1edu2{
			font-size: 1.6em;
			}
			#imgrela{
				width: 50px;
				margin-top:-10px; 
			}
			#h4rela{
			margin-top:5px; 
			font-size:1.45em; 
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
try{
		$sql = $conecta->query('select id,nome,perfil,login,senha from usuario where login = "'.$login.'" and senha = md5("'.$senha.'")');
		$linha = $sql->fetch(PDO::FETCH_ASSOC);
	
		if($linha['perfil'] == "coordenador"){
			require("header_coord.php");	
			require("body_relatorio1.php");

		}
		if($linha['perfil'] == "secretaria"){
			require("header_secretaria.php");
			require("body_relatorio1.php");

		}

		if($linha['perfil'] == "educador"){
			require("header_educador.php");
			require("body_relatorio1.php");

		}
}
	catch (Exception $erro) {
	echo 'Erro: ', $erro->getMessage(), "\n";
	}

    ?>
    
</body>
</html>