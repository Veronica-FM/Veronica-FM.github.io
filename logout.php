<?php
session_start();
session_destroy();

try{
	
	header('Location: index.php');
}
	
catch (Exception $erro){
echo 'Erro: ', $erro->getMessage(), "\n";

}

?>