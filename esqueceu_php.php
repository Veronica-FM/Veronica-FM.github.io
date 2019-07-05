<?php 
require("conexao.php");
$login = filter_input(INPUT_POST, 'login');
$senha = filter_input(INPUT_POST, 'senha');

$consulta = $conecta->query('select id,nome,perfil,login,senha from usuario where login="'.$login.'"');
		$linha = $consulta->fetch(PDO::FETCH_ASSOC);

if($linha['login']==$login){	
			$result =$conecta->prepare("UPDATE usuario SET senha=md5('$senha') WHERE login = '$login'");
			$result->execute();
	echo '<script>alert("Senha alterada com sucesso !! ☺");</script>';
	echo "<script>location.href='esqueceu.php';</script>";
}
else{
	echo '<script>alert("Usuário inexistente");</script>';
	echo "<script>location.href='esqueceu.php';</script>";
}
	

	

		

		
	

?>