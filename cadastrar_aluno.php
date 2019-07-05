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
	$login = $_SESSION['login'];
	$senha = $_SESSION['senha'];
	$nome = $_POST['nome'];
	$data = $_POST['data'];
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$cep = $_POST['cep'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$telefone = $_POST['telefone'];
	$celular = $_POST['celular'];
	
	try{
		$consulta = $conecta->query('select id,nome,perfil,login,senha from usuario where login="' .$login.'" and senha=md5("'.$senha.'")');
		$linha = $consulta->fetch(PDO::FETCH_ASSOC);
		if($linha['perfil']=="coordenador"){
		require("header_coord.php");
		}
		if($linha['perfil']=="secretaria"){
		require("header_secre.php");
		}
		
		$cadastro = 'insert into aluno (matricula, nome, data_nascimento, rg, cpf, cep, rua, numero, bairro, cidade, estado, telefone, celular) values (null, "'.$nome.'","'.$data.'","'.$rg.'","'.$cpf.'","'.$cep.'","'.$rua.'","'.$numero.'","'.$bairro.'","'.$cidade.'","'.$estado.'","'.$telefone.'","'.$celular.'")';
		
		$insere = $conecta->prepare($cadastro);
		$insere->execute();
		
		echo '<script>alert("Aluno(a) cadastrado(a) com sucesso !! ");</script>';
		echo "<script>location.href='cadastro.php';</script>";
	}
		catch (Exception $erro) {
			echo 'Erro: ', $erro->getMessage(), "\n";
		}
	?>
</body>
</html>