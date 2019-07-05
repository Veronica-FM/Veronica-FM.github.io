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
	$nome_func = $_POST['nome_func'];
	$data_func = $_POST['data_func'];
	$rg_func = $_POST['rg_func'];
	$cpf_func = $_POST['cpf_func'];
	$cep_func = $_POST['cep_func'];
	$rua_func = $_POST['rua_func'];
	$numero_func = $_POST['numero_func'];
	$bairro_func = $_POST['bairro_func'];
	$cidade_func = $_POST['cidade_func'];
	$estado_func = $_POST['estado_func'];
	$telefone_func = $_POST['telefone_func'];
	$celular_func = $_POST['celular_func'];
	
	try{
		$consulta = $conecta->query('select id,nome,perfil,login,senha from usuario where login="' .$login.'" and senha=md5("'.$senha.'")');
		$linha = $consulta->fetch(PDO::FETCH_ASSOC);
		if($linha['perfil']=="coordenador"){
		require("header_coord.php");
		}
		if($linha['perfil']=="secretaria"){
		require("header_secre.php");
		}
		
		$cadastro = 'insert into funcionario (matricula_func, nome_func, data_nascimento_func, rg_func, cpf_func, cep_func, rua_func, numero_func, bairro_func, cidade_func, estado_func, telefone_func, celular_func) values (null, "'.$nome_func.'","'.$data_func.'","'.$rg_func.'","'.$cpf_func.'","'.$cep_func.'","'.$rua_func.'","'.$numero_func.'","'.$bairro_func.'","'.$cidade_func.'","'.$estado_func.'","'.$telefone_func.'","'.$celular_func.'")';
		
		$insere = $conecta->prepare($cadastro);
		$insere->execute();
		echo '<script>alert("Funcionário(a) cadastrado(a) com sucesso !! ");</script>';
		echo "<script>location.href='cadastro.php';</script>";
	}
		catch (Exception $erro) {
			echo 'Erro: ', $erro->getMessage(), "\n";
		}
	?>
</body>
</html>