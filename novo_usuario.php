<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.1, maximum-scale=1">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
	  
	<link rel="stylesheet" href="indexcss.css" type="text/css">
	  
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	  
	  <link rel="icon" type="image/x-icon" href="Midia-20190412T161604Z-001/Midia/log-in.ico">
	  
    <title>Cadastro Usuário</title>
	
	  
	  <style>
	  	.btn_footer{
		animation-duration: 0s;
	}
	.btn_footer:hover{
		animation-duration: 1s;
		animation-iteration-count: infinite;
	}
		  
		  .a_footer{
			  animation-duration: 0s;
		  } 
		  .a_footer:hover{
			  animation-duration: 2s;
			  animation-iteration-count: infinite;
		  }
		  .img_footer{
			  width: 100%;
		height: 110px;
	}
		  #icom{
			  width:25px;
			  height: auto;
		  }
		  
	  </style>
  </head>
	
	
  <body id="bodycadastro">
	 
	  <header id="headerindex" class="container-fluid" style="background-color: #9dd0e7; height: auto; width: 100%;">
	<div class="text-center" style="padding: 10px;">
	<a href="index.php"><img class="logoo" src="Midia-20190412T161604Z-001/Midia/logo4.png" alt="logo"></a>	
	 </div> 
		  
		  
	</header>
	
	<nav class="navbar navbar-dark navbar-expand-lg" style="background-color:#011E49; width: 100%;">
	  <a class="navbar-brand mt-n1" href="#"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" onMouseOver="mudaicom()" onMouseOut="muda2icom()" >
			<img id="icom" src="Midia-20190412T161604Z-001/Midia/menu.png">
		 </button>
	  <div   class="collapse navbar-collapse" id="navbarNav" >  
		<ul id="ul_index" class="navbar-nav">
		  <li id="li1_index" class="nav-item active licad">
			<i id="home_index" class="fas fa-sign-in-alt"></i><a id="a1_index"  class="nav-link"  href="#" >CADASTRO</a>
		  </li>
			<li  id="li2_index" class="nav-item active licad" style="border:none;" >
			<i  id="log_index" class="fas fa-home"></i><a id="a2_index"  class="nav-link" href="index.php">INÍCIO</a>
		  </li>
		</ul>
			 
	  </div>
		
		<button id="btnimpr"   style="color:#fff;width: 4%; height:auto; padding:5px; border-right: 1px solid #fff; outline:none; background-color: transparent; border:none; border-right: 1px solid #fff;" onClick="face();"><i class="fab fa-facebook-square" style="font-size: 2em; color: #fff; "></i></button>
		
				<button id="btnajud" style="color:#fff;width: 4%; height:auto; padding:5px; border-right: 1px solid #fff; outline:none; background-color: transparent; border:none;" onClick="tw()"><i class="fab fa-twitter-square" style="font-size: 2.2em; color: #fff;"></i></button>
	  </nav>
	  
		<main id="main_login" class="container-fluid">
	  
			<div id="meio_login" class="container-fluid">
				<div id="divimg_login" class="container-fluid">
				
					
				<h1 id="h1_login">Sem perca de tempo</h1>
				<h1 id="h12_login"> FAÇA JÁ O CADASTRO <i id="btn4_login" class="far fa-hand-point-right" style="font-size: 1.3em"></i></h1>
					<br><br><br>
					<button type="button" class="btn btn-light btn2_login" onClick="login();">LOGIN</button><br><br>
					<button type="button" class="btn btn-light btn2_login" onClick="avaliar();">AVALIAR</button><br><br>
					<button  type="button" class="btn btn-light btn2_login" style="margin-bottom: 3%;" onClick="contato();">CONTATO</button><br>
					<div id="divp_login">
					<a data-toggle="modal" data-target="#exampleModal" href="#" class="p_login"> <i class="far fa-question-circle" style=" color: #fff; font-size: 1em; margin-top: -1.5%;"></i> Como preencher </a><br>
						
						<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Primeiro cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-justify font-weight-bolder;">
        <p>1 - Preencha o nome completo (válido) do usuário que deseja cadastrar.</p>
		<p>2 - Selecione com o perfil que é a atual profissão do usúario.</p>
		<p>3 - é recomendado que o login seja preenchido com as inicias do nome do usúario + OBS. exemplo: " anvOBS ".</p>
		<p>4 - toda senha deve ter no minino 6 caracters e no máximo 10.  </p> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
      </div>
    </div>
  </div>
</div>
						
					<a href="contato.php" class="p_login" style="margin-top: -3%;">  Não está entrando <i class="far fa-question-circle" style=" color: #fff; font-size: 1em; margin-top: -1.5%;"></i> </a>
					</div>
					<div  id="divp_login2">
					
					<a   data-toggle="modal" data-target="#example" href="#" class="p_login"> <i class="far fa-question-circle" style=" color: #fff; font-size: 1em; margin-top: -1.5%; margin-bottom: 12px"></i> Como preencher</a><br>
						
						<div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabell" aria-hidden="true">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabell">Primeiro cadastro</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body text-justify font-weight-bolder;">
								<p>1 - Preencha o nome completo (válido) do usuário que deseja cadastrar.</p>
								<p>2 - Selecione com o perfil que é a atual profissão do usúario.</p>
								<p>3 - é recomendado que o login seja preenchido com as inicias do nome do usúario + OBS. exemplo: " anvOBS ".</p>
								<p>4 - toda senha deve ter no minino 6 caracters e no máximo 10.  </p> 
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
							  </div>
							</div>
						  </div>
						</div>	
						
					<a href="contato.php" class="p_login"  >  Não está entrando <i class="far fa-question-circle" style=" color: #fff; font-size: 1em; margin-top: -1.5%;"></i> </a>
					</div>
				</div>
				<br>
			
				
				<aside  id="divimg2_usu" class="container-fluid">
					
					<div  style="margin-top: 0px" id="divform_login" class="container-fluid">
						<h1 id="h13_login">NOVO USUÁRIO</h1>
					<form name="novo_usuario" id="novo_usuario" method="post" action="cadastrar_usuario.php" onSubmit="return valida();" >
						
						<label class="lbl_login" for="nome"><i class="fas fa-users" style="font-size:0.8em;"></i> Nome</label><br>
						<input class="input_login" type="text" name="nome" id="nome" placeholder="Nome Completo" ><br>
						
						<label class="lbl_login" for="perfil_login">Perfil</label><br>
						<select name="perfil_login" id="perfil_login" onChange="mostrafoto(perfil_login)">
						<option value="">-</option>
						<option value="coordenador">Coordenador</option>
						<option value="secretaria">Secretaria</option>
						<option value="educador">Educador</option>
						</select>
						<br>
						
						<label class="lbl_login" for="login"><i class="fas fa-users" style="font-size:0.8em;"></i> Login:</label><br>
						<input class="input_login" type="text" name="login" id="login" placeholder="Nome de usuário"><br>
						
						<label class="lbl_login" for="senha"><i class="fas fa-lock" style="font-size:0.8em;"></i> Senha  </label><br>
					 	<input class="input_login" type="password" name="senha" id="senha" placeholder="********"><div style="padding: 0px; margin: 0px; margin-top: -10px; margin-bottom: -13px;"><small style="color:#c9c9c9;" >Digite no maximo 10 caracters.</small></div><br>
						
						<label class="lbl_login" for="senha"><i class="fas fa-lock" style="font-size:0.8em;"></i> Confirmação de senha</label><br>
					 	<input class="input_login" type="password" name="confirma" id="confirma" placeholder="********"><br>
						
						<div id="divbtn_login">
						<button class="btn btn-light" type="reset" id="btn1_login" onClick="limpar()"><i class="fas fa-times btn_login"></i></button>
							
						<button type="submit" class="btn btn-light" type="button" id="btn2_login" onClick="logar()"><i  class="fas fa-chevron-right btn_login " style="padding-left: 7px"></i></button>
						</div>
						<br>
						
						<div id="divbtn2_login">
						<button type="reset" class="btn btn-light" type="reset" id="btn6_login" onClick="limpar()"><i class="fas fa-times btn_login"></i></button>
							
						<button type="submit" class="btn btn-light" type="button" id="btn5_login" ><i  class="fas fa-chevron-right btn_login " style="padding-left: 7px"></i></button>
						</div>
						</form>
						</div>
						</aside>
			
			</div>
	  	</main>
	 
	
	    <?php 
	require("Footer_idexMen.php");
		?>

	  <script>
		
		  function face(){
			  location="https://www.facebook.com/domboscoitaquera/"
		  }
		  
		  function tw(){
			  location="https://twitter.com/osdb"
		  }
		  function login(){
			  location="login.php"
		  }
		  function avaliar(){
			  location="avaliar.php"
		  }
		  function contato(){
			  location="contato.php"
		  }
		  
		  function valida(){
			if(novo_usuario.nome.value.length>40){
				alert("Nome inválido!");
				novo_usuario.nome.focus();
				return false;
			}

			if(novo_usuario.confirma.value!=novo_usuario.senha.value){
				alert("As senhas devem ser iguais.");
				novo_usuario.confirma.focus();
				return false;
			}

			if(novo_usuario.senha.value.length<6 || novo_usuario.senha.value.length>10){
				alert("A senha deve ter no minimo 6 e no máximo 10 caracteres.");
				novo_usuario.senha.focus();
				return false;
			}
		}
		  	   function mudaicom(){
            document.getElementById("icom").src="Midia-20190412T161604Z-001/Midia/close.png";
        }
		 function muda2icom(){
            document.getElementById("icom").src="Midia-20190412T161604Z-001/Midia/menu.png";
        }
		
		 
		

		  
	  </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>