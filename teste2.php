<?php 
$nome_usuario= $_POST['nome_usuario'];
			$novaS = substr(md5(time()), 0, 6);


$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "sysdb";

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

			$result = "UPDATE usuario SET senha ='$novaS' WHERE nome = '$nome_usuario'";
			mysqli_query($conn, $result);			

?>

<form method="post" action="teste2.php">
	<input type="text" name="nome_usuario">
	<button type="submit">ok</button>
	<a href="teste.php">alterar</a>
</form>
