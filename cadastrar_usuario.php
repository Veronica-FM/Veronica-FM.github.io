<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	require("conexao.php");
	$nome = $_POST['nome'];
	$perfil = $_POST['perfil_login'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
try{
	$cadastro = 'insert into usuario (id,nome,perfil,login,senha) values (null,"'.$nome.'","'.$perfil.'","'.$login.'",md5("'.$senha.'"))';
	$insere = $conecta->prepare($cadastro);
	$insere->execute();
	
		echo '<script>alert("Usuário cadastrado com sucesso !! ");</script>';
		echo "<script>location.href='novo_usuario.php';</script>";
	}
		catch(Exception $erro) {
			echo 'Erro' , $erro->getMessage(), "\n";
		}
	?>
	
</body>
</html>