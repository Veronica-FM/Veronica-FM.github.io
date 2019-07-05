<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<title>SYSDB</title>
	<style>
		
		#h1edu2{
			margin-left:3%;
			margin-top: 30px;
			font-size: 2em;
			font-family: 'timesnewroman';
			color: #9dd0e7;
			margin-bottom: -5px;
		}
		
		td{
			font-size:1.3em;
			text-align: center;
			font-weight: 400;
			
		}
		th{
			font-size: 1.4em;
			font-weight: 700;
			background-color:#9dd0e7; 
			color:#fff;
		}
		p{
			font-size: 1.2em;
			margin-left:3.3%;
		}
		
	.but{
			  animation-duration: 0s;
		  }
		  .but:hover{
			  animation-duration: 0.7s;
			  animation-iteration-count: infinite;
		  }  
		
		.i_mov{
			  animation-duration: 1.3s;
			  animation-iteration-count: infinite;
		}
		
		@media screen and (max-width:500px){
			input[type=checkbox]{
			width: 20px;
			height: 15px;
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
		$turma = $_POST['turm'];
		$curso = $_POST['curso'];
		$data = date('Y-m-d');
		$sql = $conecta->query('select id,nome,perfil,login,senha from usuario where login = "'.$login.'" and senha = md5("'.$senha.'")');
		$linha = $sql->fetch(PDO::FETCH_ASSOC);
	
		if($linha['perfil'] == "coordenacao"){
			require("header_coord.php");

		}
		if($linha['perfil'] == "secretaria"){
			require("header_secretaria.php");

		}
		if($linha['perfil'] == "educador"){
			require("header_educador.php");

		}
		try{
				 $meses = array(
                '01'=>'Janeiro',
                '02'=>'Fevereiro',
                '03'=>'Março',
                '04'=>'Abril',
                '05'=>'Maio',
                '06'=>'Junho',
                '07'=>'Julho',
                '08'=>'Agosto',
                '09'=>'Setembro',
                '10'=>'Outubro',
                '11'=>'Novembro',
                '12'=>'Dezembro'

                );
     
				$chamada = $conecta->query('select mt.matricula_aluno, a.nome, mt.id_turma,c.nome_curso,t.id_curso,t.periodo from matricula_turma as mt inner join aluno as a on a.matricula = mt.matricula_aluno inner join turma as t on t.id = mt.id_turma inner join curso as c on c.id = t.id_curso where mt.id_turma='. $turma.'');

				while($lista = $chamada->fetch(PDO::FETCH_ASSOC)){
					
					if(array_key_exists( 'check_' . $lista['matricula_aluno']  , $_POST)){

						$p = "p";

					} else {

						$p = "f";			
				}
					$sql2 = 'insert into chamada (id_turma,id_curso,matricula_aluno,data,p_f) values ("'.$turma.'","'.$curso.'","'.$_POST['mat_'.$lista['matricula_aluno']].'","'.$data.'","'.$p.'")';
					$insere = $conecta->prepare($sql2);
					$insere->execute();

				}
						
			echo('<main>');					

			echo('<h1 id="h1edu2"> Chamada do dia '); echo date('d-m-Y');echo(" registrada com sucesso!");echo('</h1>');		

			echo("<p>Relatório do Mês: "); echo $meses[date('m')];echo "/";echo date('Y');echo("</p>");		          		   

			echo('<div class="table-responsive"><table class="table table-bordered table-hover" style="width:95%; margin-left:3%; margin-top:5px; ">');

			echo('<tr>
				<th scope="col" style="text-align: center;">#</th>
			
				<th style="text-align: center;">Matrícula</th>

				<th style="text-align: center;">Aluno</th>');

                $count = $conecta->query('select distinct data from chamada where id_turma = '.$turma.' and month(data) = '.date('m').'');

                while($cont=$count->fetch(PDO::FETCH_ASSOC)){

                    $dt = $cont['data'];

                echo('<th style="text-align: center;">'.date('d/m/Y',strtotime($dt)).'</th>
				</tr>');       
                }
		

				$count2 = $conecta->query('select distinct ch.matricula_aluno,a.nome from chamada as ch inner join aluno as a on a.matricula = ch.matricula_aluno where id_turma = '.$turma.'');                              
               while($cont2=$count2->fetch(PDO::FETCH_ASSOC)){
                echo('<tr> <th style="text-align: center;" scope="row"><i class="fas fa-star"></i></th>');
               echo('<td>'.$cont2['matricula_aluno'].'</td>');
               echo('<td>'.$cont2['nome'].'</td>'); 
                  $presenca = $conecta->query('select p_f from chamada where id_turma = '.$turma.' and matricula_aluno = '.$cont2['matricula_aluno'].''); 
                   while($freq = $presenca->fetch(PDO::FETCH_ASSOC)){
                   echo '<td>'.$freq['p_f'].'</td>';

                   }
                   echo '</tr>';

               }                      
            

			echo('</table></div>');		

		}

		catch (Exception $e) {

		echo 'Erro: ',  $e->getMessage(), "\n";}

		echo('<hr> <button id="btncompr" style="margin-left:3%;" type="button" class="btn mov but animated pulse" onClick="voltar();"><i class="i_mov fas fa-arrow-left"></i> VOLTAR</button>

			<button id="btn3compr" type="button" class="btn but animated pulse" onClick="ajuda();"><i class="fas fa-question"></i> AJUDA</button><br>
			
			<button style="margin-left:3%;" type="reset" class="btn btn_compr but animated pulse" onClick="voltar();"><i class="fas fa-arrow-left"></i></button>
			
			<button  type="button" class="btn btn_compr but animated pulse" onClick="ajuda();"><i class="fas fa-question"></i></button><br></main>');
	
		require("Footer_edu.php");

	?>
	
	<script>
	$(function(){

	$('button.mov').on('mouseover',function(){
		$('i.i_mov').addClass('animated slideInRight');
	});
	});
		
		function voltar(){
			location="fazerchamada.php";
		}
		 function ajuda(){
			 location="contato.php";
		 }
		
		
	</script>
</body>
</html>