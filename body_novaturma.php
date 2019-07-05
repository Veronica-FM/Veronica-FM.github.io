 <main id="main_matricula" class="container-fluid" style="margin:0px; padding: 0px; overflow-x: hidden;">
		 
		
		 <form name="nova_turma" id="nova_turma" method="post" action="cadastrar_turma.php">
			
		 <div id="matricula_alunoo" class="container-fluid">
			 <h1 id="h1cad1" style="margin-top:10px; font-size: 2em; ">CRIAR NOVA TURMA</h1>
			
		 	<div id="divimg_turma">
				<img id="imgaluno_matricula" src="Midia-20190412T161604Z-001/Midia/teacher.png" class="img-thumbnail" alt="sdsd" >
				<i id="i_img" class="i_img fas fa-arrow-right"></i>
				<img id="imgcurso_matricula" src="Midia-20190412T161604Z-001/Midia/book.png" class="img-thumbnail" alt="sdsd"  ><i id="i2_img" class="i_img fas fa-arrow-right "></i>
				<img id="imgperiodo_matricula" src="Midia-20190412T161604Z-001/Midia/peri.png" class="img-thumbnail" alt="sdsd" ><br> 
			</div>
			<div id="form_turma" class="form-row">
			<div class="form-group col-md-3 mt-2" style="margin-left: 10px;margin-right: 3%;">
			  <label for="educador">Nome do Educador:</label>
			   <select class="custom-select" name="educador" id="educador" required>
				<option value="" selected disabled>Selecione um Educador</option>
			
			<?php 
		
			$consulta = $conecta->query('select id, nome from usuario where perfil="educador" order by nome');
		while($educador = $consulta->fetch(PDO::FETCH_ASSOC)){
			echo('<option value="'.$educador['id'].'">'.$educador['nome'].'</option>');
		}
			?>
				</select>
				</div>
		<div class="form-group col-md-3 mt-2" style="margin-left: 10px;margin-right: 3%;">
			  <label for="curso">Nome do Curso:</label>
			   <select class="custom-select" name="curso" id="curso" required>
				<option value="" selected disabled>Selecione um Curso</option>
			<?php 
			$consulta = $conecta->query('select id, nome_curso from curso order by nome_curso');
		while($curso = $consulta->fetch(PDO::FETCH_ASSOC)){
			echo('<option value="'.$curso['id'].'">'.$curso['nome_curso'].'</option>');
		}
			
			?>
				
		  </select>
			</div>
			<div class="form-group col-md-3 mt-2" style="margin-left: 10px;margin-right: 3%;">
			  <label for="periodo">Periodo</label>
			   <select class="custom-select" id="periodo" name="periodo">
				<option selected>-</option>
				<option value="Manhã">Manhã</option>
				<option value="Tarde">Tarde</option>
				<option value="Noite">Noite</option>
		  </select>
			</div>
			 <br>
			 
			 </div>		 
			  </div>
			 <button id="btn1_turma" type="reset" class="btn form-group" ><i class="fas fa-broom"></i> LIMPAR</button>

			  <button id="btn2_turma" type="submit" class="btn form-group"><i class="fas fa-save"></i> SALVAR</button>
		</form> 
		 <hr style="border: 1px dashed #c9c9c9; width: 80%; margin-left: 10%">
		 <h1 class="h1Center">PESQUISAR ALUNO</h1>
		 <br>
		
		 
		 <form  name="matricula_aluno" id="matricula_aluno" method="post" action="consultar_aluno.php">
		  <div id="input_matricula" class="form-group" >
			
			<input class="form-control" type="text" name="matricula" id="matricula" placeholder="Digite o número de matricula">
			<small id="emailHelp" class="form-text text-muted">A matricula do aluno deve ser válida</small>
		  </div>
		
		
		<div class="row" id="center_ou" >
			<div   id="div3_ou">
			  <hr>
			</div>
			<div id="div1_ou">
			  <p style="font-weight: 600; font-family: arial">OU</p>
			</div>
			<div id="div2_ou">
			  <hr>
			</div>
		</div>
		
			 <div class="form-group" id="input_cpf">
			<input  class="form-control" type="text" name="cpf" id="cpf" placeholder="Digite o CPF do aluno">
			<small id="smallcpf" class="form-text text-muted">O CPF do aluno deve ser válido</small>
		  </div>
			 
			 <button id="btn3_turma" type="reset" class="btn form-group"><i class="fas fa-broom"></i> LIMPAR</button>

			  <button id="btn4_turma" type="submit" class="btn form-group" ><i class="fas fa-save"></i> PESQUISAR</button>
			 
		 
		 </form>
		 
		
	  </main>
		
	
	<?php
		require("Footer_coord.php");
		?>