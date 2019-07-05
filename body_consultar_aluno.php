<?php 
$aluno = $conecta->query("select matricula, nome from aluno where cpf LIKE '%$cpf%' and matricula LIKE '%$matricula%'");
		
		$resultado = $aluno->fetch(PDO::FETCH_ASSOC);
		
		echo('<div style="margin-top:60px;"> <form name="matricular_aluno" id="matricular_aluno" method="post" action="matricular_aluno.php">
		
		<div id="perfil" class="container-fluid">
			<div id="contaluno">
			<img id="imgaluno1" src="Midia-20190412T161604Z-001/Midia/backpack.png" class="img-thumbnail" alt="sdsd"><br>
		<div id="radioaluno1" class="custom-control custom-radio custom-control-inline" >
		  <input type="radio" id="aluno2" name="perfil" class="custom-control-input" onClick="mostradiv()">
		  <label class="custom-control-label" for="aluno2">ALUNO</label>
		</div>
		</div>
			
			<div id="contprof">
		<img id="imgaluna" src="Midia-20190412T161604Z-001/Midia/ALUNA.png" class="img-thumbnail" alt="sdsd" ><br>	
		<div id="radialuna2" class="custom-control custom-radio custom-control-inline" >
		  <input type="radio" id="aluna2" name="perfil" class="custom-control-input" onClick="mostradiv2()">
		  <label class="custom-control-label" for="aluna2">ALUNA</label>
		</div>
		</div>
			
		</div>
		<hr style="width:70%; margin-left:15%;">
		<h1 id="h1cad1">INFORMAÇÕES CONSULTADAS</h1>
		
		<div class="row" id="divform_con"> 
		
		<i><img src="Midia-20190412T161604Z-001/Midia/matricula.png" alt="ico socio" style="width: 20px; height: auto; margin-top:-2px;"></i> <label for="matricula" style="font-size:1.2em; padding-left:2px;"> Matrícula</label>
		<input class="form-control" type="text" name="matricula" id="matricula" value="'.$resultado['matricula'].'"><br>
		
		
		
		<i><img src="Midia-20190412T161604Z-001/Midia/alunoo.png" alt="ico socio" style="width: 20px; height: auto; margin-top:15px"></i><label for="nome" style="font-size:1.2em; padding-left:5px; margin-top:1%">Nome do aluno</label>
		<input class="form-control" type="text" name="nome" id="nome" value="'.$resultado['nome'].'"><br>
		
		');
			$turma = $conecta->query('select turma.id as t,turma.id_curso,turma.periodo,curso.nome_curso from turma inner join curso on turma.id_curso=curso.id order by curso.nome_curso');
		
		
		echo('
		<i><img src="Midia-20190412T161604Z-001/Midia/turma.png" alt="ico socio" style="width: 20px; height: auto; margin-top:15px"></i><label for="turma" style="font-size:1.2em; padding-left:5px; margin-top:1%">Turma</label><br>
		<select class="custom-select" name="turma" id="turma" required>
		<option value="" selected disabled>Selecione uma Turma</option>
		
         ');
	
			while($option = $turma->fetch(PDO::FETCH_ASSOC)){
			echo('<option value="'.$option['t'].'">'.$option['nome_curso'].' - '.$option['periodo'].'</option>');	
			}
	
		echo('</select><br></div></div>
 			<button id="btnconsu" type="button" class="btn form-group" onClick="voltar();"><i class="fas fa-exchange-alt"></i> TROCAR</button>
			<button id="btn2consu" type="submit" class="btn form-group"><i class="fas fa-save"></i> MATRÍCULAR</button> 
</form>
' );
			
		
		
		require("Footer_coord.php");

?>