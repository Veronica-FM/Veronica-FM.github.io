<!doctype html>
<html lang="pt-br">
  <head>
   
	 
  	</head>

<body>
	<?php 
	session_start();
	require("conexao.php");
	$login = $_SESSION['login'];
	$senha = $_SESSION['senha'];
	$curso = $_POST['nome_curso'];
	try{
		$consulta = $conecta->query('select id,nome,perfil,login,senha from usuario where login="' .$login.'" and senha=md5("'.$senha.'")');
		$linha = $consulta->fetch(PDO::FETCH_ASSOC);
		
		if($linha['perfil']=="coordenador"){
		require("header_coord.php");
		}
		if($linha['perfil']=="secretaria"){
		require("header_secre.php");
		}
			$cadastro = 'insert into curso (id,nome_curso) values (null,"'.$curso.'" )';
			
			$inserir = $conecta->prepare($cadastro);
			
			
		if($curso=="PADERO" or $curso=="CONFEITEIRO" or $curso=="OPERADOR DE COMPUTADOR" or $curso=="PROGRAMADOR WEB" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL" or $curso=="AUXILIAR DE PESSOAL"  ) {
		echo '<script>alert("Curso já cadastrado. Confira os predefinidos");</script>';
			echo "<script>location.href='novo_curso.php';</script>";
		}
		else{
			$inserir->execute();
			echo '<script>alert("Curso cadastrado com sucesso !");</script>';
			echo "<script>location.href='novo_curso.php';</script>";
		}
		}
		catch (Exception $erro) {
			echo 'Erro: ', $erro->getMessage(), "\n";
		}
	
	?>
</body>
</html>