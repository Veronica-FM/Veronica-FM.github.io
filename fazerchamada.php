<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fazer Chamada</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	
	<style>
	
	body{overflow-x: hidden; }	
	
	main{
		margin-top: 40px;
		}	
		
	#h1edu{
	font-family: 'timesnewroman';
	font-size: 2.7em;
	text-align: center;
	margin-left: -0%;
	color: #9dd0e7;
	margin-top: 20px;
	}
	
	#divform_edu{
		margin-left: 23.4%;
		width: 54%;
		padding: 0px;
		border: 1px solid #c9c9c9;
		padding: 30px;
		border-radius: 5px;
	}
	
	#centerou_edu{
		width: 100%;
		padding-left: 28.3%;
		margin-top: 1%;
		margin-bottom: 1%;	
		
	}	
		
	#div1ou_edu{
		padding-left: 10px; 
		padding-right: 10px; 
		padding-top: 3px;
		
	}
		
	#div2ou_edu,#div3ou_edu{
		width: 30%;
		padding-top: 10px;
		
	}
		
	.copycad{
		font-size: 1.5em;	
	}
	
	#footer_edu{
		background-color: #9dd0e7; 
		text-align: center; 
		padding: 5px;
		height: auto; 
		margin-top:90px;
		margin-bottom: 0px;
	}
		
	.but{
			  animation-duration: 0s;
		  }
		  .but:hover{
			  animation-duration: 0.7s;
			  animation-iteration-count: infinite;
		  }  	
	
	@media screen and (max-width:1366px){
	#divform_edu{
		margin-left: 15.4%;
		width: 70%;
		padding: 0px;
		border: 1px solid #c9c9c9;
		padding: 30px;
		border-radius: 5px;
	}
		
	#centerou_edu{
		width: 100%;
		padding-left: 16.3%;
		margin-top: 1%;
		margin-bottom: 1%;	
		
	}	
		
	#div2ou_edu,#div3ou_edu{
		width: 40%;
		padding-top: 10px;
		
	}
	}
	
	@media screen and (max-width:800px){
	#divform_edu{
		margin-left: 5.4%;
		width: 90%;
	}
	
	#centerou_edu{
		padding-left: 11.3%;

	}
		
	#div2ou_edu,#div3ou_edu{
	width: 40%;	
	}
	}
	@media screen and (max-width:450px){
	#divform_edu{
		margin-left: 2.4%;
		width: 95%;
		padding: 15px;
	}
	
		#h1edu{
			font-size:2.5em;
		}
		
		#centerou_edu{
		padding-left: 11.3%;
		width: 100%;
	}
		.btn_compr{
			font-size:1em;
			width: 20%;
		}
		#footer_edu{
		margin-top:10px;
	}
		}
	</style>
	
</head>

<body>
	<?php
	session_start();
	require("conexao.php");
	$login = $_SESSION['login'];
	$senha = $_SESSION['senha'];
	try{
		$consulta = $conecta->query('select id, nome, perfil, login, senha from usuario where login="'.$login.'"and senha=md5("'.$senha.'")');
		$linha = $consulta->fetch(PDO::FETCH_ASSOC);
		
		if($linha['perfil']=="educador"){
			require("header_educador.php");
			echo('<main>');
			echo('<h1 id="h1edu"> Bem Vindo, '.$linha['nome'].'.<br><img src="Midia-20190412T161604Z-001/Midia/deal.png" alt="ico socio" style="width: 80px; height: auto; margin-top:-5px; margin-bottom:20px;"><h1>');
		
			echo( '<div class="row" id="centerou_edu" >
			<div   id="div3ou_edu">
			  <hr>
			</div>
			<div id="div1ou_edu>
			  <p style="margin-top:-15px"><i class="fas fa-star"></i></p>
			</div>
			<div id="div2ou_edu">
			  <hr>
			</div>
		</div>');	
		
			echo('
			
			
			
			<form name="turmas_prof" id="turmas_prof" method="post" action="chamada.php">
			
			<div class="row" id="divform_edu"> 
			
			<label for="turma" style="font-size:0.8em;">Escolha a turma</label><br>
			 <select style="font-size:0.5em;" class="custom-select" name="turma" id="turma" required>
			<option value="" selected disabled>-</option>');
		
			$turma = $conecta->query('select turma.id, turma.id_educador, turma.periodo, turma.id_curso, curso.nome_curso from turma inner join usuario on usuario.id = turma.id_educador inner join curso on curso.id = turma.id_curso where usuario.id = "'.$linha['id'].'"');
			
			while($option = $turma->fetch(PDO::FETCH_ASSOC)){
				
				echo('<option value="'.$option['id'].'">'.$option['nome_curso'].' - '.$option['periodo'].'</option>');
			}
		
			echo('</select><small style="font-size: 0.5em; margin-top:5px;" id="passwordHelpBlock" class="text-muted">Somente seleções válidas são permitidas. </small></div>
			
			<div class="text-center" style="margin-top:15px;">
			<button id="btncompr" type="reset" class="btn but animated pulse " onClick="voltar();"><i class="fas fa-broom"></i> LIMPAR</button>

			<button id="btn2compr" type="submit" class="btn but animated pulse "><i class="fas fa-save"></i> SALVAR</button>
			
			<button id="btn3compr" type="button" class="btn but animated pulse" onClick="ajuda();"><i class="fas fa-question"></i> AJUDA</button>
			
			<button  type="button" class="btn btn_compr but animated pulse" onClick="voltar();"><i class="fas fa-broom"></i></button>

			<button type="submit" class="btn  btn_compr but animated pulse"><i class="fas fa-save"></i></button>
			
			<button  type="button" class="btn btn_compr but animated pulse" onClick="ajuda();"><i class="fas fa-question"></i></button>
			</div>
			</form><br>
			
			');
		echo('</main>');
		
		require("Footer_edu.php");
		
	
		}
	}
	catch (Exception $erro) {
	echo 'Erro: ', $erro->getMessage(), "\n";
	}
	
		
			?>
</body>
</html>