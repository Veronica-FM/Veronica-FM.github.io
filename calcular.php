<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
</head>

<body>
	<?php 
	$nota1 = $_POST['nota1'];
	$nota2 = $_POST['nota2'];
	
	$resultado = ($nota1+$nota2)/2;
	
	echo("A média é: "); echo($resultado); echo('<br>');
	
	if($resultado>=6){
		echo("Aprovado");
	}
	else{
		echo("Reprovado");
	}
	
	?>
	<a href="ex1.php">Voltar</a>
</body>
</html>