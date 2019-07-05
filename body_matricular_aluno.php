<head>
	<style>
		.btn_compr{display:none;}
		#sua_div{
			display:none;
		}
		@media screen and (max-width:1920px){
			#img_tb{
			position: absolute;
			z-index: 100;
			width: 14%;
			margin-top: -50px;
			margin-left: 120px;
			}
		}	
		
		@media screen and (max-width:1366px){
		#img_tb{
			position: absolute;
			z-index: 100;
			width: 14%;
			margin-top: -30px;
			margin-left: 50px;
		}
		}
		
		
		
		@media print{
		#suadiv{
			display:block;
		}	
		}
		
		@media screen and (max-width:450px){
		.btn_compr{
display: inline;
background-color:#9dd0e7; 
color:#FFF;
width: 50px;
padding: 7px;
font-size: 1.8em;
}
	}
	</style>
</head>

<?php 
		$matricular = 'insert into matricula_turma (matricula_aluno,id_turma,data) values("'.$matricula.'","'.$turma.'","'.$data.'")';
		$insere = $conecta->prepare($matricular);
		$insere->execute();
		echo '<div id="conteudo"><script>alert("Aluno(a) matriculado(a) com sucesso !! ");</script>';
		
		$valida = $conecta->query('select matricula_turma.matricula_aluno,aluno.nome,matricula_turma.id_turma,curso.nome_curso,turma.periodo from matricula_turma inner join aluno on aluno.matricula=matricula_turma.matricula_aluno inner join turma on turma.id=matricula_turma.id_turma inner join curso on curso.id=turma.id_curso where matricula_turma.matricula_aluno ="'.$matricula.'"');
		
		echo('<img id="img_tb" src="Midia-20190412T161604Z-001/Midia/gif.gif">');
		
		echo(' <div id="div_tb" class="container-fluid">');
	
		echo('<h4 id="h4_tab" class="alert-heading" >');
		
		$tabela = $valida->fetch(PDO::FETCH_ASSOC);
		
		echo "".$tabela['nome']."";
		
		echo(' Matrículado(a) !!</h4>');
		  
		echo('<p style="font-size:1.23em">Imprima o comprovante abaixo e entregue ao educando. Peça ao mesmo para seguir as informações recomendadas pela secretaria ou coordenação.</p>
		<hr id="hr_tb">');
		echo( '<div class="row" id="centerou_edu" >
			<div   id="div3ou_edu">
			  <hr>
			</div>
			<div id="div1ou_edu>
			  <p style="margin-top:-15px;"><i style="font-size:1.7em;" class="fas fa-star"></i></p>
			</div>
			<div id="div2ou_edu">
			  <hr>
			</div>
		</div>');	
		echo('<p style="font-size:1.15em">*<strong>Obrigatório</strong> a entrega do comprovante no inicio das aulas.</p>');
			
			
		
		echo('<table id="table_test" class="table table-bordered table-hover">');
		
		echo('<tr><th style="text-align: center;">');echo("Matrícula");echo('</th>');
		echo('<th style="text-align: center;" class="th_ds">');echo("Nome do aluno");echo('</th>');
		echo('<th style="text-align: center; border:none;" class="th_mbb">');echo("Nome");echo('</th>');
		echo('<th style="text-align: center;">');echo("Turma");echo('</th>');
		echo('<th style="text-align: center;">');echo("Curso");echo('</th>');
		echo('<th style="text-align: center;">');echo("Periodo");echo('</th><tr>');
		$tabela = $valida->fetch(PDO::FETCH_ASSOC);
		echo('<tbody><tr>');
		echo"<td>".$tabela['matricula_aluno']."</td>";
		echo'<td>'.$tabela['nome'].'</td>';
		echo"<td>".$tabela['id_turma']."</td>";
		echo"<td>".$tabela['nome_curso']."</td>";
		echo"<td>".$tabela['periodo']."</td>";
		echo('</tbody></tr>');
		echo('</table><br>
		
		<button id="btncompr" type="button" class="btn " onClick="voltar();"><i class="fas fa-exchange-alt"></i> TROCAR</button>
		
		<button id="btn2compr" type="button" class="btn " oNclick="imprimir();"><i class="fas fa-print"></i> IMPRIMIR</button>
			
		<button id="btn3compr" type="button" class="btn " onClick="ajuda();"><i class="fas fa-question"></i> AJUDA</button>
			
		<button  type="button" class="btn btn_compr" onClick="voltar();"><i class="fas fa-exchange-alt"></i></button>

		<button type="submit" class="btn  btn_compr"><i class="fas fa-print"></i></button>
			
		<button  type="button" class="btn btn_compr" onClick="ajuda();"><i class="fas fa-question"></i></button></form></div> 
		
		</div><br>');
	
		
			require("Footer_coord.php");

		echo('<div id="sua_div">');

		echo '<h4 style="margin:5px; text-align:center; ">'.$tabela['nome']."";
				echo(' , você foi matrículado(a). </h4><br>');

		echo('Siga as informaçåo da secretaria.<br><strong>*Obrigatório: a entrega do comprovante no inicio das aulas. </strong>');


		echo('<table id="table_test1" style="border: 2px solid #a9a9a9; width:100%; margin:10px;margin-left:7px;padding:5px;"');

			echo('<tr><th style="text-align: center;border-right: 1px solid #a9a9a9;border-bottom:1px solid #a9a9a9;;font-size:1.3em;padding:5px;">');echo("Matrícula");echo('</th>');
			echo('<th style="text-align: center;border-bottom:1px solid #a9a9a9;border-right: 1px solid #a9a9a9; font-size:1.3em;padding:5px;" class="th_ds">');echo("Nome do aluno");echo('</th>');
			echo('<th style="text-align: center;border-right: 1px solid #a9a9a9;border-bottom:1px solid #a9a9a9;;font-size:1.3em;padding:5px;">');echo("Turma");echo('</th>');
			echo('<th style="text-align: center;border-right: 1px solid #a9a9a9;border-bottom:1px solid #a9a9a9;;font-size:1.3em;padding:5px;">');echo("Curso");echo('</th>');
			echo('<th style="text-align: center;border-bottom:1px solid #a9a9a9;;font-size:1.3em;padding:5px;">');echo("Periodo");echo('</th><tr>');
			$tabela = $valida->fetch(PDO::FETCH_ASSOC);
			echo('<tbody><tr>');
			echo'<td style="font-size:1.3em;text-align: center;font-weight: 400;border-right:1px solid #a9a9a9; padding:5px;">'.$tabela['matricula_aluno']."</td>";
			echo'<td style="font-size:1.3em;text-align: center;font-weight: 400;border-right:1px solid #a9a9a9; padding:5px;">'.$tabela['nome'].'</td>';
			echo'<td style="font-size:1.3em;text-align: center;font-weight: 400;border-right:1px solid #a9a9a9; padding:5px;">'.$tabela['id_turma']."</td>";
			echo'<td style="font-size:1.3em;text-align: center;font-weight: 400;border-right:1px solid #a9a9a9; padding:5px;">'.$tabela['nome_curso']."</td>";
			echo'<td style="font-size:1.3em;text-align: center;font-weight: 400;padding:5px;">'.$tabela['periodo']."</td>";
			echo('</tbody></tr>');
			echo('</table><br> </div>
			');

			?>

<script>
        document.getElementById('btn2compr').onclick = function() {
            var conteudo = document.getElementById('sua_div').innerHTML,
                tela_impressao = window.open('about:blank');
            tela_impressao.document.write(conteudo);
            tela_impressao.window.print();
            tela_impressao.window.close();
        };
        </script>