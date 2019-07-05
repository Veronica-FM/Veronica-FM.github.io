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
	
	  <link rel="icon" type="image/x-icon" href="Midia-20190412T161604Z-001/Midia/log-in.ico">
	  
    <title>Login</title>
	
  </head>
	
	
  <body id="bodycadastro">
	 
	  <header id="headerindex" class="container-fluid" style="background-color: #9dd0e7; height: auto; width: 100%;">
	<div class="text-center" style="padding: 10px;">
	<a href="index.html"><img class="logoo" src="Midia-20190412T161604Z-001/Midia/logo4.png" alt="logo"></a>	
	 </div> 
		  
		  
	</header>
	
	<nav class="navbar navbar-dark navbar-expand-lg" style="background-color:#011E49; width: 100%;">
	  <a class="navbar-brand mt-n1" href="#"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div   class="collapse navbar-collapse" id="navbarNav" >  
		<ul id="ul_index" class="navbar-nav">
		  <li id="li1_index" class="nav-item active licad">
			<i id="home_index" class="fas fa-sign-in-alt"></i><a id="a1_index"  class="nav-link"  href="#" >LOGIN</a>
		  </li>
			<li  id="li2_index" class="nav-item active licad" style="border:none;" >
			<i  id="log_index" class="fas fa-home"></i><a id="a2_index"  class="nav-link" href="index.html">INICIO</a>
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
				<h1 id="h12_login"> FAÇA JÁ SEU LOGIN <i id="btn4_login" class="far fa-hand-point-right" style="font-size: 1.3em"></i></h1>
					<br><br><br>
					<button class="btn btn-light btn2_login">CADASTRO</button><br><br>
					<button  class="btn btn-light btn2_login">AVALIAR</button><br><br>
					<button  class="btn btn-light btn2_login" style="margin-bottom: 3%;">CONTATO</button><br>
					<div id="divp_login">
					<a href="contato.html" class="p_login"> <i class="far fa-question-circle" style=" color: #fff; font-size: 1em; margin-top: -1.5%;"></i> Esqueceu a senha </a><br>
					<a href="contato.html" class="p_login" style="margin-top: -3%;">  Não está entrando <i class="far fa-question-circle" style=" color: #fff; font-size: 1em; margin-top: -1.5%;"></i> </a>
					</div>
					<div  id="divp_login2">
					<a  href="contato.html" class="p_login"> <i class="far fa-question-circle" style=" color: #fff; font-size: 1em; margin-top: -1.5%; margin-bottom: 12px"></i> Esqueceu a senha </a><br>
						
					<a href="contato.html" class="p_login"  >  Não está entrando <i class="far fa-question-circle" style=" color: #fff; font-size: 1em; margin-top: -1.5%;"></i> </a>
					</div>
				</div>
				
				
				
				<br>
			
				
				<aside id="divimg2_login" class="container-fluid">
					
					<div id="divform_login" class="container-fluid">
					<form name="novo_usuario" id="novo_usuario" method="post" action="cadastrar_usuario.php" onSubmit="return valida();">
						
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
						
						<label class="lbl_login" for="nome"><i class="fas fa-users" style="font-size:0.8em;"></i> Login:</label><br>
						<input class="input_login" id="login" placeholder="Nome de usuário" ><br>
						
						<label class="lbl_login" for="senha"><i class="fas fa-lock" style="font-size:0.8em;"></i> Senha  </label><br>
					 	<input class="input_login" type="password" name="senha" id="senha" placeholder="********"><small style="margin-top: -20px;" id="smallt">Digite no máximo 10 caracteres</small><br>
						
						<label class="lbl_login" for="senha"><i class="fas fa-lock" style="font-size:0.8em;"></i> Confirmação de senha</label><br>
					 	<input class="input_login" type="password" name="confirma" id="confirma" placeholder="********"><br>
						
						
						<div id="divbtn_login">
						<button class="btn btn-light" type="reset" id="btn1_login" onClick="limpar()"><i class="fas fa-times btn_login"></i></button>
							
						<button type="submit" class="btn btn-light" type="button" id="btn2_login" onClick="logar()"><i  class="fas fa-chevron-right btn_login " style="padding-left: 7px"></i></button>
						</div>
						<br>
						
						<div id="divbtn2_login">
						<button class="btn btn-light" type="reset" id="btn6_login" onClick="limpar()"><i class="fas fa-times btn_login"></i></button>
							
						<button class="btn btn-light" type="button" id="btn5_login" onClick="logar()"><i  class="fas fa-chevron-right btn_login " style="padding-left: 7px"></i></button>
						</div>
						</form>
						</div>
						</aside>
			
			</div>
	  	</main>
	 
	 <footer id="rodacad_login" class="container-fluid" style="background-color: #9dd0e7; text-align: center; padding: 5px; height: auto; ">
	 <h1 class="copycad"> &copy; 2019 - DEVELOPED BY: ANVGEGA</h1> 
		<h1 class="copycad">OBRA SOCIAL DOM BOSCO - ITAQUERA</h1>
	 </footer>

	  <script>
		  function face(){
			  location="https://www.facebook.com/domboscoitaquera/"
		  }
		  
		  function tw(){
			  location="https://twitter.com/osdb"
		  }
		  
		  function mostrafoto(img_login2,valor){
			var valor=document.getElementById("perfil_login").value;

			if(valor=="cordenador"){

			document.getElementById("img_login2").src="Midia-20190412T161604Z-001/Midia/Perfilcor.png";
			}

			if(valor=="educador"){

			document.getElementById("img_login2").src="Midia-20190412T161604Z-001/Midia/Perfiledu.png";

			}
			if(valor=="secretaria"){

			document.getElementById("img_login2").src="Midia-20190412T161604Z-001/Midia/Perfilsecre.png";

			}
			}
		  
		  function limpar(){
			document.getElementById("img_login2").src="Midia-20190412T161604Z-001/Midia/perfil.png";  
		  }
		  
		  
		
		  
	  </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>