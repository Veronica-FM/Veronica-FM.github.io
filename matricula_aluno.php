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
	try{
		$consulta = $conecta->query('select id,nome,perfil,login,senha from usuario where login="' .$login.'" and senha=md5("'.$senha.'")');
		$linha = $consulta->fetch(PDO::FETCH_ASSOC);
		
		if($linha['perfil']=="coordenador"){
		require("header_coord.php");
		}
		if($linha['perfil']=="secretaria"){
		require("header_secre.php");
		}
		}
		catch (Exception $erro) {
			echo 'Erro: ', $erro->getMessage(), "\n";
		}
	
	?>
	<main>
	<form name="matricula_aluno" id="matricula_aluno" method="post" action="consultar_aluno.php">
		<fieldset>
			<legend>Pesquisar educando pelo CPF ou número de matrícula</legend>
		<label for="cpf">Digite o CPF</label><br>
		<input type="text" name="cpf" id="cpf" placeholder="Digite o CPF"> OU <br>
		<label for="matricula">Número de matricula</label><br>
		<input type="text" name="matricula" id="matricula" placeholder="Digite o número de matricula"><br>
		<input type="submit" name="consultar" id="consultar" value="Consultar">
		</fieldset>
		</form>
	</main>
</body>
</html>