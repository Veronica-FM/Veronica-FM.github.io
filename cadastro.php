<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.1, maximum-scale=1">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	 
	  <title>Cadastro</title>
	<style>
	.teste {
			  animation-duration: 1s;
		  }
		  .but{
			  animation-duration: 0s;
		  }
		  .but:hover{
			  animation-duration: 0.7s;
			  animation-iteration-count: infinite;
		  }  
	</style>
  </head>
	
	
  <body id="bodycad">
<?php
	session_start();
	require("conexao.php");
	$login = $_SESSION['login'];
	$senha = $_SESSION['senha'];
	try{
		$consulta = $conecta->query('select id, nome, perfil, login, senha from usuario where login="'.$login.'"and senha=md5("'.$senha.'")');
		$linha = $consulta->fetch(PDO::FETCH_ASSOC);
		
		if($linha['perfil']=="coordenador"){
			require("header_coord.php");
			require("bodycadastro.php");
		}
		if($linha['perfil']=="secretaria"){
			require("header_secretaria.php");
			require("bodycadastro.php");
		}
	}
	catch (Exception $erro) {
	echo 'Erro: ', $erro->getMessage(), "\n";
	}
	?> 
	 <script>
		function mostradiv(){
			document.getElementById("alunof").style.display="block";
			document.getElementById("h1cad").style.display="block";
			document.getElementById("carr").style.display="none";
			
			document.getElementById("proff").style.display="none";
			document.getElementById("h1cad1").style.display="none";
		}
		 
		 function mostradiv2(){
			document.getElementById("proff").style.display="block";
			document.getElementById("h1cad1").style.display="block";
			document.getElementById("carr").style.display="none";
			 
			document.getElementById("alunof").style.display="none";
			document.getElementById("h1cad").style.display="none";
			
		}
		 
		function ocultadiv(){
			document.getElementById("alunof").style.display="none";
			document.getElementById("h1cad").style.display="none";
			document.getElementById("carr").style.display="block";
			document.getElementById("aluno").checked=false;
		}
		 function ocultadiv2(){
			document.getElementById("proff").style.display="none";
			document.getElementById("h1cad1").style.display="none";
			document.getElementById("carr").style.display="block";
			document.getElementById("prof").checked=false;
		}
		 
		 function ajuda(){
			 location="contato.html"	 
		 }
		 
		
	 </script>
	  
	
 
</html>