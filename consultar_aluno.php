<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	 
  	</head>
	
	
  <body id="bodyturma" >
  
	
	<?php 
	session_start();
	require("conexao.php");
	$login = $_SESSION['login'];
	$senha = $_SESSION['senha'];
	$cpf = $_POST['cpf'];
	$matricula = $_POST['matricula'];
	try{
		$consulta = $conecta->query('select id,nome,perfil,login,senha from usuario where login="' .$login.'" and senha=md5("'.$senha.'")');
		$linha = $consulta->fetch(PDO::FETCH_ASSOC);
		
		if($linha['perfil']=="coordenador"){
		require("header_coord.php");
		require("body_consultar_aluno.php");
		}
		if($linha['perfil']=="secretaria"){
		require("header_secretaria.php");
		require("body_consultar_aluno.php");

		}
		
		
		
	}
	catch (Exception $erro) {
			echo 'Erro: ', $erro->getMessage(), "\n";
	}
	?>
	
	
	  
	 <script>
		function face(){
			  location="https://www.facebook.com/domboscoitaquera/";
		  }
		  
		  function tw(){
			  location="https://twitter.com/osdb";
		  }
		 
		 function voltar(){
			  location="nova_turma.php";
		  }
		 
		
		 
	 </script>
</body>
</html>
