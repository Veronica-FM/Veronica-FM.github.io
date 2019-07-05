<?php 
$nome_usuario= $_POST['nome_usuario'];
$senha_usuario= $_POST['senha_usuario'];
			$novaS = md5($senha_usuario);


$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "sysdb";

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

	$consulta = $conn->query('SELECT nome FROM usuario where nome="'.$nome_usuario.'"');
		while($row = $consulta->fetch_assoc()){
			$consulta = $row;
}
return $consulta;

if($linha['nome']==$nome_usuario){	
			$result = "UPDATE usuario SET senha=md5('.$novaS.') WHERE nome = '$nome_usuario'";
			mysqli_query($conn, $result);	

		
	echo("Sua nova senha foi alterada com sucesso !");

}

?>