<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	 
  	</head>
<body>
	<?php
		session_start();
	require("conexao.php");
	$login = $_SESSION['login'];
	$senha = $_SESSION['senha'];
	$curso = $_POST['curso'];
	$educador = $_POST['educador'];
	$periodo = $_POST['periodo'];
	$data = date('Y-m-d');
	try{
	$consulta = $conecta->query('select id,nome,perfil,login,senha from usuario where login="'.$login.'" and senha=md5("'.$senha.'")');
		$linha = $consulta->fetch(PDO::FETCH_ASSOC);
		
		if($linha['perfil']=="coordenador"){
			require("header_coord.php");
			
		}
		if($linha['perfil']=="secretaria"){
			require("header_secre.php");
			
		}
		$cadastro = 'insert into turma (id, id_curso, id_educador, periodo, data) values (null,"'.$curso.'","'.$educador.'","'.$periodo.'","'.$data.'")';
		
		$insere = $conecta->prepare($cadastro);
		$insere->execute();
		
		echo '<script>alert("Turma cadastrada com sucesso !! ");</script>';
		echo "<script>location.href='nova_turma.php';</script>";
		
	
		
	}
		catch(Exception $erro) {
			echo 'Erro' , $erro->getMessage(), "\n";
		}
	?>
</body>
</html>