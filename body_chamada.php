<?php 
$chamada = $conecta->query('select mt.matricula_aluno, a.nome, mt.id_turma,c.nome_curso,t.id_curso,t.periodo from matricula_turma as mt inner join aluno as a on a.matricula = mt.matricula_aluno inner join turma as t on t.id = mt.id_turma inner join curso as c on c.id = t.id_curso where mt.id_turma='.$turma.'');

		echo('<main>');

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

        echo('<h1 id="h1edu2">Mês: '.$meses[date('m')]. '/' .date('Y').'</h1>');
		echo('<div style="margin-left:3%;"><strong>*Observação: </strong>Marque o checkbox para presença ou deixe desmarcado para falta.</div>');
        echo('<form name="registrar_chamada" id="registrar_chamada" method="post" action="registrar_chamada.php">'); 
		echo('<table class="table table-bordered table-hover" style="width:95%; margin-left:3%; margin-top:5px; ">');
		echo('<tr><th scope="col" style="text-align: center;">#</th><th style="text-align: center;">Matrícula</th>
		<th style="text-align: center;">Aluno</th>
		<th style="text-align: center;">'.date('d').'</th>
				<tr>');          

	    $entrou = false;
	
		while($lista = $chamada->fetch(PDO::FETCH_ASSOC)){
			if(!$entrou){

				echo('<input type="hidden" name="turm" id="turm" value="'.$lista['id_turma'].'">');
				echo('<input type="hidden" name="curso" id="curso" value="'.$lista['id_curso'].'">');
				$entrou = true;

			}

			echo('<tbody><tr>');
			echo('<th style="text-align: center;" scope="row"><i class="fas fa-laugh-squint"></i></th><td>');echo'<input style="width:5%;; border:none; background-color: transparent; outline:none;" type="text" name="mat_'. $lista['matricula_aluno'] .'" id="mat_'. $lista['matricula_aluno'] .'" value="'.$lista['matricula_aluno'].'" readonly>';echo'</td>';
			echo('<td>'.$lista['nome'].'</td>');        
			echo('<td>');
			echo('
				<input type="checkbox" name="check_'. $lista['matricula_aluno'] .'" id="check_'. $lista['matricula_aluno'] .'" >');echo '</td>';
			echo('</tr>');
			
		}

	echo('  </tbody></table>');
	echo('<hr style="10%; margin-left:3%;">
		</div><button id="btncompr" style="margin-left:3%;" type="reset" class="btn " onClick="voltar();"><i class="fas fa-broom"></i> LIMPAR</button>

			<button id="btn2compr" type="submit" class="btn "><i class="fas fa-save"></i> SALVAR</button>
			
			<button id="btn3compr" type="button" class="btn" onClick="ajuda();"><i class="fas fa-question"></i> AJUDA</button>
			
			<button style="margin-left:3%;" type="reset" class="btn btn_compr" ><i class="fas fa-broom"></i></button>

			<button type="submit" class="btn  btn_compr"><i class="fas fa-save"></i></button>
			
			<button  type="button" class="btn btn_compr" onClick="ajuda();"><i class="fas fa-question"></i></button>
			</div>
			<br>');
	echo('</form></main>');
	require("Footer_edu.php");
?>