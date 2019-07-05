<?php 
	session_start();
	require("conexao.php");
	$login = $_SESSION['login'];
	$senha = $_SESSION['senha'];
	
	try{
	$consulta = $conecta->query('select id,nome,perfil,login,senha from usuario where login="'.$login.'"and senha=md5("'.$senha.'")');
		$linha = $consulta->fetch(PDO::FETCH_ASSOC);
		
		
		if($linha['perfil']=="coordenador"){	
			require("header_coord.php");
			
		}
				
		if($linha['perfil']=="secretaria"){
			require("header_secretaria.php");
			
		}
		
		if($linha['perfil']=="educador"){
			require("header_educador.php");
		}
		
		
		if($linha['perfil']=="coordenador"){
			echo "<script>location.href='Aluno.php';</script>";
		}
		
		if($linha['perfil']=="educador"){
				echo "<script>location.href='fazerchamada.php';</script>";
		}
		if($linha['perfil']=="secretaria"){
					echo "<script>location.href='cadastro.php';</script>";
		}
			
		
	}
		catch(Exception $erro) {
			echo 'Erro' , $erro->getMessage(), "\n";
			
		}

		echo '<script>alert("Login ou senha inválido. ");</script>';
			echo "<script>location.href='login.php';</script>";

	?>