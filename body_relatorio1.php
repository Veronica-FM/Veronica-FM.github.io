<head>
<style>
	.btn_compr{
				  display: none;
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
<main>
    <form name="relatorio" id="relatorio" method="post" action="gerar_relatorio.php">
			<h1 id="h1edu2"><img id="imgrela" src="Midia-20190412T161604Z-001/Midia/report.png" alt="ico socio"> Relatório de frequência</h1>
		<?php
			echo('<h4 id="h4rela"> Sr(a),' .$linha['nome'].' siga as informaçoes abaixo para analisar o relatório.<br><h4>');
			
		
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
		?>
		<div class="container-fluid" id="divform_rela"> 
            <i><img src="Midia-20190412T161604Z-001/Midia/matricula.png" alt="ico socio" style="width: 20px; height: auto; margin-top:-2px;"></i> <label for="turma" style="font-size:1.1em; padding-left:2px; font-family: 'timesnewroman';">Escolha a turma</label>
             <select class="custom-select" name="turma" id="turma" required>
				<option value="" selected disabled>-</option>
                <?php

                    if($linha['perfil']=="educador"){

                    $turma = $conecta->query('select turma.id as id,turma.id_educador,turma.periodo,turma.id_curso,curso.nome_curso from turma inner join usuario on usuario.id = turma.id_educador inner join curso on curso.id = turma.id_curso where usuario.id = "'.$linha['id'].'"');

                    }  

                    if($linha['perfil']=="coordenador"){

                        $turma = $conecta->query('select turma.id as id,turma.id_educador,turma.periodo,turma.id_curso,curso.nome_curso from turma inner join usuario on usuario.id = turma.id_educador inner join curso on curso.id = turma.id_curso');

                    } if($linha['perfil']=="secretaria"){

                        $turma = $conecta->query('select turma.id as id,turma.id_educador,turma.periodo,turma.id_curso,curso.nome_curso from turma inner join usuario on usuario.id = turma.id_educador inner join curso on curso.id = turma.id_curso');

                    }

                    while($option = $turma->fetch(PDO::FETCH_ASSOC)){

				    echo('<option value="'.$option['id'].'">'.$option['nome_curso'].' - '.$option['periodo'].'</option>');
					}

                ?>

            </select><small style="font-size: 0.7em; margin-top:5px;" id="passwordHelpBlock" class="text-muted">Somente seleções válidas são permitidas. </small><br>

          
		<i><img src="Midia-20190412T161604Z-001/Midia/mes.png" alt="ico socio" style="width: 20px; height: auto; margin-top:-5px"></i><label for="mes" style="font-size:1.1em; padding-left:5px; margin-top:1%; font-family: 'timesnewroman';">Escolha o mês</label>
            <select class="custom-select" name="mes" id="mes" required>
				<option value="" selected disabled>-</option>
				<option value="01">Janeiro</option>
                <option value="02">Fevereiro</option>
                <option value="03">Março</option>
                <option value="04">Abril</option>
                <option value="05">Maio</option>
                <option value="06">Junho</option>
                <option value="07">Julho</option>
                <option value="08">Agosto</option>
                <option value="09">Setembro</option>
                <option value="10">Outubro</option>
                <option value="11">Novembro</option>
                <option value="12">Dezembro</option>

            </select><small style="font-size: 0.7em; margin-top:5px;" id="passwordHelpBlock" class="text-muted">Somente seleções válidas são permitidas. </small><br>

            
		<i><img src="Midia-20190412T161604Z-001/Midia/2019.png" alt="ico socio" style="width: 20px; height: auto; margin-top:-5px"></i><label for="ano" style="font-size:1.1em; padding-left:5px; margin-top:1%; font-family: 'timesnewroman';">Escolha o ano</label>
             <select class="custom-select" name="ano" id="ano" required>
				<option value="" selected disabled>-</option>
				<option value="2018">2018</option> 
                <option value="2019">2019</option>
            </select><small style="font-size: 0.7em; margin-top:5px;" id="passwordHelpBlock" class="text-muted">Somente seleções válidas são permitidas. </small><br>
		</div>
            
		<br><div class="text-center" style="margin-top:-4px; margin-bottom: 5px;">
			<button id="btncompr" type="reset" class="btn but animated pulse"><i class="fas fa-broom"></i> LIMPAR</button>

			<button id="btn2compr" type="submit" class="btn but animated pulse"><i class="fas fa-save"></i> SALVAR</button>
			
			<button id="btn3compr" type="button" class="btn but animated pulse" onClick="ajuda();"><i class="fas fa-question"></i> AJUDA</button>
			
			<button  type="button" style="width: 20%; font-size: 1.6em;" class="btn btn_compr but animated pulse" onClick="voltar();"><i class="fas fa-broom"></i></button>

			<button type="submit" style="width: 20%; font-size: 1.6em;" class="btn  btn_compr but animated pulse"><i class="fas fa-save"></i></button>
			
			<button  type="button" style="width: 20%; font-size: 1.6em;" class="btn btn_compr but animated pulse" onClick="ajuda();"><i class="fas fa-question"></i></button>
			</div>
			</form></main>
		<?php
		require("Footer_coord.php");
		?>
<script>
	function ajuda(){
			 location="contato.php";
		 }
</script>