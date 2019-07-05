<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<?php 
	session_start();
	require("conexao.php");
	$nome_cont = $_POST['nome_cont'];
	$perfil_cont = $_POST['perfil_cont'];
	$mensagem_cont = $_POST['mensagem_cont'];
	$email_cont = $_POST['email_cont'];
	
	
	try{
		
		$cadastro = 'insert into contato (idmsg_cont, nome_cont, perfil_cont, mensagem_cont, email_cont) values (null, "'.$nome_cont.'","'.$perfil_cont.'","'.$mensagem_cont.'","'.$email_cont.'")';
		
		$insere = $conecta->prepare($cadastro);
		$insere->execute();
		
		echo '<script>alert("Mensagem enviada com sucesso !! ");</script>';
		echo "<script>location.href='contato.php';</script>";
		
	}
		catch (Exception $erro) {
			echo 'Erro: ', $erro->getMessage(), "\n";
		}
	?>
</body>
</html>