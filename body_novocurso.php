<head>
<style>
	.btn_curso{
	font-size: 1.5em;
	color:#fff;
	width: 100%;
	background-color: #9dd0e7;
	font-family: 'Oswald', sans-serif;
		font-weight: 300;
		
	
}
.btn_curso:hover{
	background-color: rgba(157,208,231,0.90);
	color:#fff;
}
.btn_curso:focus{
	background-color: #9dd0e7;
}

	</style>
</head> 

<main class="container-fluid" id="meio_curso" style=" font-family: sans-serif;">
	  	
		<form name="novo_curso" id="novo_curso" method="post" action="cadastrar_curso.php">
			
		  <div id="divform_curso" class="container-fluid">
			 
			<div >
				<label for="nome_curso" style="font-size:  1.5em;">Cadastre um curso: </label>
			  	<input class="form-control" name="nome_curso" id="nome_curso" placeholder="Digite um nome para o curso" style="text-transform: uppercase;">
				<small id="passwordHelpBlock" class="text-muted">
					 O nome do curso deve ser válido. 
  				</small>
				<br id="brform_curso">
				<a id="a_curso" href="comocadastrar.php">Como cadastrar ? /</a>
				
				<a id="a2_curso" href="contato.php">Não está cadastrando ?</a>
				
			</div>
				
     
	 
	  <br>
		<div id="btnform_curso" class="container-fluid">
	    <button  type="reset" class="btn btn-primary" style="color:#E5E5E5; width: 48%; margin:0px;"><i class="fas fa-broom"></i> LIMPAR</button>
	  
	  <button  type="submit" name="cadastrar" id="cadastrar" value="Cadastrar Curso" class="btn btn-primary" style="color:#E5E5E5; width: 48%; margin:0px;" onClick="cadastro();"><i class="fas fa-save"></i> CADASTRAR</button>
	  
	 
			</div>
		</div> 
	</form>
			
			<hr>
		 
		 <h1 id="h1cad1">CONFIRA OS PREDEFINIDOS</h1>
		<button type="button" id="btnmostrar_curso" class="btn btn-primary" onClick="mostradiv();"> Mostrar Conteúdo</button>
		 <img id="img_curso" alt="imagem dom bosco" src="Midia-20190412T161604Z-001/Midia/cursos_profissionalissantes.jpg" style="padding: 0px; margin-left: 5%; width: 90%; height: auto; ">
		 
		 
			<div id="btns_curso" class="container-fluid">
				  <button  id="btnesconder_curso" type="button" class="btn btn-primary" style="float: right;" onClick="esconderdiv();"><i class="fas fa-times" style="font-size: 1.5em;"></i></button>
				<br>
				
				
				
				<div id="btn_cursomb">
				<span  id="lbl2_curso" class="badge badge-primary">A</span><br>
				<div id="divbtn1_curso" class="container-fluid">
				<button class="btn btn_curso"><i class="fas fa-headset"></i> Auxiliar de Pessoal</button><br><br>
						<button class="btn btn_curso"><i class="fas fa-theater-masks"></i> Aderecista</button><br><br>
						<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/ambiental.png" alt="ico socio" style="width: 25px; height: auto;"></i>  Agente Desen. Socio.</button><br><br>
						<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/fireworks.png" alt="ico socio" style="width: 25px; height: auto;"></i> Agente Cultural</button><br><br>
						<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/settings.png" alt="ico socio" style="width: 25px; height: auto;"></i> 
						Aux. Administrativo
					 	</button>
				</div>
				<br>
				
				<span  id="lbl3_curso" class="badge badge-primary">C</span><br>
				
				<div id="divbtn2_curso" class="container-fluid">
				<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/cabeleleiro.png" alt="ico socio" style="width: 25px; height: auto;"></i> Cabeleireiro Assistente</button><br><br>
				<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/cupcake.png" alt="ico socio" style="width: 25px; height: auto;"></i> Confeiteiro</button><br><br>
				<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/costu.png" alt="ico socio" style="width: 25px; height: auto;"></i> Costureiro Industrial</button><br><br>
				<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/chef.png" alt="ico socio" style="width: 25px; height: auto;"></i> Cozinheiro Industrial</button><br><br>
				<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/idoso.png" alt="ico socio" style="width: 25px; height: auto;"></i> 
				Cuidador de Idoso</button>
				</div><br>
				
				<span  id="lbl4_curso" class="badge badge-primary">D</span><br>
				<div id="divbtn3_curso" class="container-fluid">
				<button class="btn btn_curso" ><i><img src="Midia-20190412T161604Z-001/Midia/gear.png" alt="ico socio" style="width: 25px; height: auto;"></i> Desenhista Mecânico
				</button>
				
				</div><br>
				
				<span  id="lbl5_curso" class="badge badge-primary">E</span><br>
				<div id="divbtn4_curso" class="container-fluid">
				<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/visual.png" alt="ico socio" style="width: 25px; height: auto;"></i>
				Editor Proj. Visu. Gráf.
				</button><br><br>
				<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/video-camera.png" alt="ico socio" style="width: 25px; height: auto;"></i> Editor de Vídeo
				</button><br><br>
				<button class="btn btn_curso" ><i><img src="Midia-20190412T161604Z-001/Midia/electrician.png" alt="ico socio" style="width: 25px; height: auto;"></i> Eletricista Industrial
				</button><br><br>
				<button class="btn btn_curso" ><i><img src="Midia-20190412T161604Z-001/Midia/broken-cable.png" alt="ico socio" style="width: 25px; height: auto;"></i> Eletricista Baixa Tensão
				</button><br><br>
				<button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
				</button>
				</div><br>
			
				<span  id="lbl6_curso" class="badge badge-primary">F</span><br>
				<div id="divbtn6_curso" class="container-fluid">
				
				<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/figu.png" alt="ico socio" style="width: 30px; height: auto;  margin-top: -10px"></i> 
				Figurinista
				</button>
				</div><br>
			
			
				
				<span  id="lbl7_curso" class="badge badge-primary">I</span><br>
				<div id="divbtn7_curso" class="container-fluid">
				
				<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/insta.png" alt="ico socio" style="width: 30px; height: auto;  margin-top: -2px"></i>
				Instalador sist. eletrôn.
				</button><br>
				</div><br>
				
				<span  id="lbl8_curso" class="badge badge-primary">M</span><br>
				<div id="divbtn8_curso" class="container-fluid">
				
				<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/manicure.png" alt="ico socio" style="width: 30px; height: auto;  margin-top: -2px"></i> 
				Manicure e Pedicure
				</button><br><br><button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/marc.png" alt="ico socio" style="width: 30px; height: auto;  margin-top: -10px"></i> 
				Marceneiro
				</button><br><br><button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/car.png" alt="ico socio" style="width: 30px; height: auto;  margin-top: -10px"></i> 
				Mecânico Auto. Leves
				</button><br><br><button class="btn btn_curso">
				<i><img src="Midia-20190412T161604Z-001/Midia/mecani.png" alt="ico socio" style="width: 25px; height: auto;"></i>
				Mecânico Usinagem
				</button><br><br><button class="btn btn_curso">
				<i><img src="Midia-20190412T161604Z-001/Midia/meca.png" alt="ico socio" style="width: 25px; height: auto;"></i> 
				Mecatrônica
				</button><br><br><button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/equip.png" alt="ico socio" style="width: 25px; height: auto;">
				Montador de equip.
				</button><br><br><button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/monta.png" alt="ico socio" style="width: 25px; height: auto;"></i>
				Montador e Reparador
				</button><br><br>
				</div><br>
				
				<span  id="lbl9_curso" class="badge badge-primary">O</span><br>
				<div id="divbtn9_curso" class="container-fluid">
				
				<button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/opera.png" alt="ico socio" style="width: 25px; height: auto;">
				Operador Computador
				</button><br><br><button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/opera1.png" alt="ico socio" style="width: 25px; height: auto;">
				Operador Injetor 
				</button><br><br><button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/maqu.png" alt="ico socio" style="width: 25px; height: auto;"> 
				Operador Máquinas Usin.
				</button><br><br><button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/torn.png" alt="ico socio" style="width: 25px; height: auto;"> 
				Operador de Torno
				</button><br><br><button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/linha.png" alt="ico socio" style="width: 25px; height: auto;"> 
				Operador linha mont. 
				</button><br><br>
				<button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/event.png" alt="ico socio" style="width: 25px; height: auto;"> 
				Organizador de Eventos
				</button><br>
				</div><br>
				
				<span  id="lbl14_curso" class="badge badge-primary">P</span><br>
				<div id="divbtn14_curso" class="container-fluid">
				
				<button class="btn btn_curso">
				<img src="Midia-20190412T161604Z-001/Midia/pad.png" alt="ico socio" style="width: 25px; height: auto;">
				Padeiro
				</button><br><br><button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/pedre.png" alt="ico socio" style="width: 25px; height: auto;"> 
				Pedreiro de Alvenaria
				</button><br><br><button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/syst.png" alt="ico socio" style="width: 25px; height: auto;"> 
				Programador de Sistemas
				</button><br><br><button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/web.png" alt="ico socio" style="width: 30px; height: auto; margin-top: -5px;">
				Programador de Web
				</button><br><br> 
				</div><br>
				
				<span  id="lbl15_curso" class="badge badge-primary">R</span><br>
				<div id="divbtn15_curso" class="container-fluid">
				
				<button class="btn btn_curso">
				<img src="Midia-20190412T161604Z-001/Midia/recre.png" alt="ico socio" style="width: 25px; height: auto;">  
				Recreador
				</button><br><br> 
				</div><br>
				
				<span  id="lbl16_curso" class="badge badge-primary">S</span><br>
				<div id="divbtn16_curso" class="container-fluid">
				
				<button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/sere.png" alt="ico Serígrafo" style="width: 25px; height: auto;">
				Serígrafo
				</button><br><br>
				<button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/sor.png" alt="ico socio" style="width: 25px; height: auto;"> 
				Sorveteiro
				</button> 
				</div>
				</div>
				
			<div id="btn_cursods" class="container-fluid">
				  <div class="row">
					<div class="col-sm">
					  <span  id="lbl10_curso" class="badge badge-primary">A</span><br>
					<div id="divbtn10_curso">
						<button class="btn btn_curso"><i class="fas fa-headset"></i> Auxiliar de Pessoal</button><br><br>
						<button class="btn btn_curso"><i class="fas fa-theater-masks"></i> Aderecista</button><br><br>
						<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/ambiental.png" alt="ico socio" style="width: 25px; height: auto;"></i>  Agente Desen. Socio.</button><br><br>
						<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/fireworks.png" alt="ico socio" style="width: 25px; height: auto;"></i> Agente Cultural</button><br><br>
						<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/settings.png" alt="ico socio" style="width: 25px; height: auto;"></i> 
						Aux. Administrativo
					 	</button>
					</div>
					</div>
					<div class="col-sm">
					<span  id="lbl11_curso" class="badge badge-primary">C</span><br>
				
				<div id="divbtn11_curso" class="container-fluid">
				<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/cabeleleiro.png" alt="ico socio" style="width: 25px; height: auto;"></i> Cabeleireiro Assistente</button><br><br>
				<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/cupcake.png" alt="ico socio" style="width: 25px; height: auto;"></i> Confeiteiro</button><br><br>
				<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/costu.png" alt="ico socio" style="width: 25px; height: auto;"></i> Costureiro Industrial</button><br><br>
				<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/chef.png" alt="ico socio" style="width: 25px; height: auto;"></i> Cozinheiro Industrial</button><br><br>
				<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/idoso.png" alt="ico socio" style="width: 25px; height: auto;"></i> 
				Cuidador de Idoso</button>
				</div><br>
					</div>
					<div class="col-sm">
					  <span  id="lbl12_curso" class="badge badge-primary">D</span><br>
				<div id="divbtn12_curso" class="container-fluid">
				<button class="btn btn_curso" ><i class="fas fa-headset"></i> Desenhista Mecânico
				</button><br><br>
				<button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
				</button><br><br><button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
				</button><br><br><button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
				</button><br><br><button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
				</button><br><br>
			
				</div><br>
					</div>
				<div class="col-sm">
				<span  id="lbl13_curso" class="badge badge-primary">E</span><br>
				<div id="divbtn13_curso" class="container-fluid" style="border-right:  none;">
				<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/visual.png" alt="ico socio" style="width: 25px; height: auto;"></i>
				Editor Proj. Visu. Gráf.
				</button><br><br>
				<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/video-camera.png" alt="ico socio" style="width: 25px; height: auto;"></i> Editor de Vídeo
				</button><br><br>
				<button class="btn btn_curso" ><i><img src="Midia-20190412T161604Z-001/Midia/electrician.png" alt="ico socio" style="width: 25px; height: auto;"></i> Eletricista Industrial
				</button><br><br>
				<button class="btn btn_curso" ><i><img src="Midia-20190412T161604Z-001/Midia/broken-cable.png" alt="ico socio" style="width: 25px; height: auto;"></i> Eletricista Baixa Tensão
				</button><br><br>
				<button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
				</button>
				</div><br>
					</div>
				  </div>
					 <hr>
					
					  <div class="row">
						<div class="col-sm">
					<span  id="lbl17_curso" class="badge badge-primary">F</span><br>
					<div id="divbtn17_curso" class="container-fluid">
				
					<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/figu.png" alt="ico socio" style="width: 30px; height: auto;  margin-top: -10px"></i> 
					Figurinista
					</button><br><br>
					<button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
					</button><br><br><button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
					</button><br><br><button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
					</button><br><br><button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
					</button><br><br><button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
					</button><br><br><button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
					</button><br><br>
					</div><br>
						</div>
						<div class="col-sm">
					<span  id="lbl18_curso" class="badge badge-primary">I</span><br>
					<div id="divbtn18_curso" class="container-fluid">

					<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/insta.png" alt="ico socio" style="width: 30px; height: auto;  margin-top: -2px"></i>  
					Instalador sist. eletrôn.
					</button><br><br><button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
					</button><br><br><button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
					</button><br><br><button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
					</button><br><br><button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
					</button><br><br><button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
					</button><br><br><button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
					</button><br><br>
					</div><br>
						</div>
						<div class="col-sm">
						<span  id="lbl19_curso" class="badge badge-primary">M</span><br>
					<div id="divbtn19_curso" class="container-fluid">

					<button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/manicure.png" alt="ico socio" style="width: 30px; height: auto;  margin-top: -2px"></i> 
					Manicure e Pedicure
					</button><br><br><button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/marc.png" alt="ico socio" style="width: 30px; height: auto;  margin-top: -10px"></i> 
					Marceneiro
					</button><br><br><button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/car.png" alt="ico socio" style="width: 30px; height: auto;  margin-top: -10px"></i>  
					Mecânico Auto. Leves
					</button><br><br><button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/mecani.png" alt="ico socio" style="width: 25px; height: auto;"></i> 
					Mecânico Usinagem
					</button><br><br><button class="btn btn_curso"><i><img src="Midia-20190412T161604Z-001/Midia/meca.png" alt="ico socio" style="width: 25px; height: auto;"></i> 
					Mecatrônica
					</button><br><br><button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/equip.png" alt="ico socio" style="width: 25px; height: auto;">
					Montador de equip.
					</button><br><br><button class="btn btn_curso">
					<i><img src="Midia-20190412T161604Z-001/Midia/monta.png" alt="ico socio" style="width: 25px; height: auto;"></i>
					Montador e Reparador
					</button><br><br>
							</div>
							</div>
						  <div class="col-sm">
					<span  id="lbl20_curso" class="badge badge-primary">O</span><br>
					<div id="divbtn20_curso" class="container-fluid" style="border-right:  none;">
					<button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/opera.png" alt="ico socio" style="width: 25px; height: auto;">
				Operador Computador
				</button><br><br><button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/opera1.png" alt="ico socio" style="width: 25px; height: auto;">
				Operador Injetor 
				</button><br><br><button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/maqu.png" alt="ico socio" style="width: 25px; height: auto;"> 
				Operador Máquinas Usin.
				</button><br><br><button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/torn.png" alt="ico socio" style="width: 25px; height: auto;"> 
				Operador de Torno
				</button><br><br><button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/linha.png" alt="ico socio" style="width: 25px; height: auto;">
				Operador linha mont. 
				</button><br><br>
				<button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/event.png" alt="ico socio" style="width: 25px; height: auto;"> 
				Organizador de Eventos
				</button><br><br>
				<button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
				</button>
				</div>
				</div>
				</div>
				
				 <hr>	
				<div class="container-fluid">
				  <div class="row">
					<div class="col-sm">
					 <span  id="lbl21_curso" class="badge badge-primary">P</span><br>
						<div id="divbtn21_curso" class="container-fluid" >

						<button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/pad.png" alt="ico socio" style="width: 25px; height: auto;">

						Padeiro
						</button><br><br><button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/pedre.png" alt="ico socio" style="width: 25px; height: auto;">
							
						Pedreiro de Alvenaria
						</button><br><br><button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/syst.png" alt="ico socio" style="width: 25px; height: auto;">
							
						Programador de Sistemas
						</button><br><br><button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/web.png" alt="ico socio" style="width: 30px; height: auto; margin-top: -5px;">
						Programador de Web
						</button><br><br> 
						</div>
					</div><br>
					  
					<div class="col-sm">
					 <span  id="lbl22_curso" class="badge badge-primary">R</span><br>
					<div id="divbtn22_curso" class="container-fluid">

					<button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/recre.png" alt="ico socio" style="width: 25px; height: auto;"> 
					Recreador
					</button><br><br> 
					
				<button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
				</button><br><br>
				<button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
				</button><br><br>
				<button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
				</button>
					</div>
					</div><br>
					<div class="col-sm">
					<span  id="lbl23_curso" class="badge badge-primary">S</span><br>
					<div id="divbtn23_curso" class="container-fluid" style="border-right:  none;">

					<button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/sere.png" alt="ico Serígrafo" style="width: 25px; height: auto;">
					Serígrafo
					</button><br><br>
					<button class="btn btn_curso"><img src="Midia-20190412T161604Z-001/Midia/sor.png" alt="ico socio" style="width: 25px; height: auto;"> 
					Sorveteiro
					</button><br><br>
				<button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
				</button><br><br>
				<button class="btn btn_curso" ><i class="fas fa-times"></i> Não Cadastrado
				</button>
					</div><br>
					</div>
					</div>
				</div>
					
			</div>
		</div>
	 </main>
	
	<?php
		require("Footer_coord.php");
		?>

