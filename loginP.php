<?php
session_start();
$login =$_POST['login'];
$senha =$_POST['senha'];

try{
	$_SESSION['login']=$login;
	$_SESSION['senha']=$senha;
	
	header('location: painel.php');
}
catch(Exception $erro) {
	echo 'erro', $erro->getMessage(), "\n";
}
?>