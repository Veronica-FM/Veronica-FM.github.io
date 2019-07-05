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
	$SerGeral = $_POST['Servico'];
	$DesGeral= $_POST['Design'];
	$FunGeral = $_POST['Funcionalidade'];
	$mensagem_ava = $_POST['mensagem_ava'];
	
	try{
		
		$cadastro = 'insert into avaliar (id_ava, Servico, Design, Funcionalidade, mensagem_ava) values (null, "'.$SerGeral.'","'.$DesGeral.'","'.$FunGeral.'","'.$mensagem_ava.'")';
		
		$insere = $conecta->prepare($cadastro);
		$insere->execute();
		
		echo '<script>alert("Obrigada por contribuir para nosso progresso ♥");</script>';
		echo "<script>location.href='avaliar.php';</script>";
		
	}
		catch (Exception $erro) {
			echo 'Erro: ', $erro->getMessage(), "\n";
		}
	?>
</body>
</html>