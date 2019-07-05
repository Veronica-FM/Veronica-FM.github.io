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
	$cpf = $_POST['cpf'];
	$matricula = $_POST['matricula'];
	try{
		$consulta = $conecta->query('select id,nome,perfil,login,senha from usuario where login="' .$login.'" and senha=md5("'.$senha.'")');
		$linha = $consulta->fetch(PDO::FETCH_ASSOC);
		
		if($linha['perfil']=="coordenador"){
		require("header_coord.php");
		}
		if($linha['perfil']=="secretaria"){
		require("header_secre.php");
		}
		
		$aluno = $conecta->query("select matricula, nome from aluno where cpf LIKE '%$cpf%' and matricula LIKE '%$matricula%'");
		
		$resultado = $aluno->fetch(PDO::FETCH_ASSOC);
		
		echo('main');
		
		echo('<form name="matricular_aluno" id="matricular_aluno" method="post" action="matricular_aluno">
		<label for="maticula">Matricula</label><br>
		<input type="text" name="matricula" id="matricula" value="'.$resultado['matricula'].'"><br>
		<label for="nome">Nome do aluno</label><br>
		<input type="text" name="nome" id="nome" value="'.$resultado['nome'].'"><br>
		');
		
			$turma = $conecta->query('select turma.id as t,turma.id_curso,turma.periodo,curso.nome_curso from turma inner join curso on turma.id_curso=curso.id order by curso.nome_curso');
		
		echo('<label for="turma">turma</label><br>
		<select name="turma" id="turma" required>
		<option value="" selected disabled>Selecione uma Turma</option>
         ');
			while($option = $turma->fetch(PDO::FETCH_ASSOC)){
				
			echo('<option value="'.$option['t'].'">'.$option['nome_curso'].' - '.$option['periodo'].'<option>');	
			
		}
		echo('/select><br>
<input type="submit" name="matricular" id="matricular" value="Matricular Aluno" 
</form>
');
		
	}
	?>
</body>
</html>