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
<?php echo '<main>';

       echo('<h1 id="h1edu2">Relatório do Mês: '); echo $mes ;echo "/";echo $ano; echo("</h1>");
		echo('<div style="margin-left:3%;"><strong>*Observação: </strong>Todos e quaisquer dados obtidos nessa tabela é totalmente confidencial, não devendo ser compartilhado.</div>');
		
			echo('<div class="table-responsive"><table id="table_gerar" class="table table-bordered table-hover">');

			echo('<th scope="col" style="text-align: center;">#</th>
			
				<th style="text-align: center;">Matrícula</th>

				<th style="text-align: center;">Aluno</th>');


                $count = $conecta->query('select distinct data from chamada where id_turma = '.$turma.' and month(data) = '.$mes.'');

                while($cont=$count->fetch(PDO::FETCH_ASSOC)){

                    $dt = $cont['data'];

                echo('<th style="text-align: center;" >'.date('d',strtotime($dt)).'</th>');
   

                }

                echo '<th style="text-align: center;">Total (F) - Mês</th>

                        <th style="text-align: center;">Total (F) - Geral</th>';
    
				
				$count2 = $conecta->query('select distinct ch.matricula_aluno,a.nome from chamada as ch inner join aluno as a on a.matricula = ch.matricula_aluno where id_turma = '.$turma.'');
                                    

               while($cont2=$count2->fetch(PDO::FETCH_ASSOC)){
                echo('<tr><th style="text-align: center;" scope="row"><i class="fas fa-star"></i></th>');
                echo('<td>'.$cont2['matricula_aluno'].'</td>');
               echo('<td>'.$cont2['nome'].'</td>'); 

                  $presenca = $conecta->query('select p_f from chamada where id_turma = '.$turma.' and matricula_aluno = '.$cont2['matricula_aluno'].''); 

                   while($freq = $presenca->fetch(PDO::FETCH_ASSOC)){

                   echo '<td>'.$freq['p_f'].'</td>';

                   }

                   $faltas = $conecta->query('select count(p_f) as total from chamada where p_f="f" and id_turma = '.$turma.' and matricula_aluno = '.$cont2['matricula_aluno'].' and month(data)='.$mes.' and year(data) = '.$ano.'');

                   while($total = $faltas->fetch(PDO::FETCH_ASSOC)){

                       echo '<td>'.$total['total'].'</td>';

                   }

                   $fg = $conecta->query('select count(p_f) as total from chamada where p_f="f" and id_turma = '.$turma.' and matricula_aluno = '.$cont2['matricula_aluno'].'');

                   while($tg = $fg->fetch(PDO::FETCH_ASSOC)){

                       echo '<td>'.$tg['total'].'</td>';

                   }

                  echo '</tr>'; 

               }
				echo('</table></div>');

   
	echo('<hr style="width:95%; margin-left:3%;">
		</div><button id="btncompr" style="margin-left:3%;" type="reset" class="btn mov but animated pulse" onClick="voltar();"><i class="i_mov fas fa-arrow-left"></i> VOLTAR</button>

			<button id="btn2compr" type="submit" class="btn but animated pulse" onClick="voltar()"><i class="fas fa-print"></i> IMPRIMIR</button>
			
			<button id="btn3compr" type="button" class="btn  but animated pulse" onClick="ajuda();"><i class="fas fa-question"></i> AJUDA</button>
			
			<button style="margin-left:3%;" type="reset" class="btn btn_compr but animated pulse" ><i class="fas fa-arrow-left"></i></button>

			<button type="button" class="btn  btn_compr but animated pulse"><i class="fas fa-print"></i></button>
			
			<button  type="button" class="btn btn_compr but animated pulse" onClick="ajuda();"><i class="fas fa-question"></i></button>
			</div>
			<br>');
		
		require("footer_coord.php");

 echo('<div id="sua_div"><h1 id="h1edu2">Relatório do Mês: '); echo $mes ;echo "/";echo $ano; echo("</h1>");
		echo('<div style="margin-left:3%;"><strong>*Observação: </strong>Todos e quaisquer dados obtidos nessa tabela é totalmente confidencial, não devendo ser compartilhado.</div><br>');
			           		   
			echo('<table style="border: 2px solid #a9a9a9; width:100%; margin:10px;margin-left:7px;padding:5px;">');

			echo('<th style="text-align: center;border-right: 1px solid #a9a9a9;border-bottom:1px solid #a9a9a9;;font-size:1.3em;padding:5px;">#</th>
			
				<th style="text-align: center;border-right: 1px solid #a9a9a9;border-bottom:1px solid #a9a9a9;;font-size:1.3em;padding:5px;">Matrícula</th>

				<th style="text-align: center;border-right: 1px solid #a9a9a9;border-bottom:1px solid #a9a9a9;;font-size:1.3em;padding:5px;">Aluno</th>');


                $count = $conecta->query('select distinct data from chamada where id_turma = '.$turma.' and month(data) = '.$mes.'');

                while($cont=$count->fetch(PDO::FETCH_ASSOC)){

                    $dt = $cont['data'];

                echo('<th style="text-align: center;border-right: 1px solid #a9a9a9;border-bottom:1px solid #a9a9a9;;font-size:1.3em;padding:5px;" >'.date('d',strtotime($dt)).'</th>');
   

                }

                echo '<th style="text-align: center;border-right: 1px solid #a9a9a9;border-bottom:1px solid #a9a9a9;;font-size:1.3em;padding:5px;">Total (F) - Mês</th>

                        <th style="text-align: center;border-bottom:1px solid #a9a9a9;;font-size:1.3em;padding:5px;">Total (F) - Geral</th>';
    
				
				$count2 = $conecta->query('select distinct ch.matricula_aluno,a.nome from chamada as ch inner join aluno as a on a.matricula = ch.matricula_aluno where id_turma = '.$turma.'');
                                    

               while($cont2=$count2->fetch(PDO::FETCH_ASSOC)){
                echo('<tr>
				
				<td style="font-size:1.3em;text-align: center;font-weight: 400;border-right:1px solid #a9a9a9; padding:5px;"><img src="Midia-20190412T161604Z-001/Midia/star.png" alt="ico socio" style="width: 20px; height: auto;"></td>');
				   
                echo('<td style="font-size:1.3em;text-align: center;font-weight: 400;border-right:1px solid #a9a9a9; padding:5px;">'.$cont2['matricula_aluno'].'</td>');
               echo('<td style="font-size:1.3em;text-align: center;font-weight: 400;border-right:1px solid #a9a9a9; padding:5px;">'.$cont2['nome'].'</td>'); 

                  $presenca = $conecta->query('select p_f from chamada where id_turma = '.$turma.' and matricula_aluno = '.$cont2['matricula_aluno'].''); 

                   while($freq = $presenca->fetch(PDO::FETCH_ASSOC)){

                   echo '<td style="font-size:1.3em;text-align: center;font-weight: 400;border-right:1px solid #a9a9a9; padding:5px;">'.$freq['p_f'].'</td>';

                   }

                   $faltas = $conecta->query('select count(p_f) as total from chamada where p_f="f" and id_turma = '.$turma.' and matricula_aluno = '.$cont2['matricula_aluno'].' and month(data)='.$mes.' and year(data) = '.$ano.'');

                   while($total = $faltas->fetch(PDO::FETCH_ASSOC)){

                       echo '<td style="font-size:1.3em;text-align: center;font-weight: 400;border-right:1px solid #a9a9a9; padding:5px;">'.$total['total'].'</td>';

                   }

                   $fg = $conecta->query('select count(p_f) as total from chamada where p_f="f" and id_turma = '.$turma.' and matricula_aluno = '.$cont2['matricula_aluno'].'');

                   while($tg = $fg->fetch(PDO::FETCH_ASSOC)){

                       echo '<td style="font-size:1.3em;text-align: center;font-weight: 400;padding:5px;">'.$tg['total'].'</td>';

                   }

                  echo '</tr>'; 

               }
				echo('</table></div></div>');
		require("Footer_coord.php");
	
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