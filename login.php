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
	  
    <title>Login</title>
	
	  
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
	
	
  <body id="bodylogin">
	 
	  <header id="headerindex" class="container-fluid" style="background-color: #9DD0E7; height: auto; width: 100%;">
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
			<i id="home_index" class="fas fa-sign-in-alt"></i><a id="a1_index"  class="nav-link"  href="#" >LOGIN</a>
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
				<h1 id="h12_login"> FAÇA JÁ SEU LOGIN <i id="btn4_login" class="far fa-hand-point-right" style="font-size: 1.3em"></i></h1>
					<br><br><br>
					<button type="button" class="btn btn-light btn2_login" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">CADASTRO</button>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					
					<strong>*Atenção: somente o usuário e senha fornecido pela instituição irá logar com sucesso.</strong> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
				<form name="form_login" action="form_login" method="post">
					  <div class="form-group">
						<label for="login" class="col-form-label">Login:</label>
						<input type="text" class="form-control" maxlength="5" id="id" name="id" required>
					  </div>
					  <div class="form-group">
						<label for="senha" class="col-form-label">Senha:</label>
						<input type="password" class="form-control" id="senha" name="senha" required placeholder="*******">
					  </div>
					</form>
				  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" onClick="logar();">Enviar</button>
      </div>
    </div>
  </div>
</div><br><br>
					<button  class="btn btn-light btn2_login" onClick="avaliar();">AVALIAR</button><br><br>
					
					<button  class="btn btn-light btn2_login" style="margin-bottom: 3%;" onClick="contato();">CONTATO</button><br>
					<div id="divp_login">
					<a href="esqueceu.php" class="p_login"> <i class="far fa-question-circle" style=" color: #fff; font-size: 1em; margin-top: -1.5%;"></i> Esqueceu a senha </a><br>
					<a href="contato.php" class="p_login" style="margin-top: -3%;">  Não está entrando <i class="far fa-question-circle" style=" color: #fff; font-size: 1em; margin-top: -1.5%;"></i> </a>
					</div>
					<div  id="divp_login2">
					<a class="p_login" href="esqueceu.php"> <i class="far fa-question-circle" style=" color: #fff; font-size: 1em; margin-top: -1.5%; margin-bottom: 12px"></i> Esqueceu a senha </a><br>
					
						<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Primeiro cadastro</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
								<form>
									<input class="form-control" type="email" id="email" name="email" required>  
								</form>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </div>
						</div>
						
					<a href="contato.php" class="p_login"  >  Não está entrando <i class="far fa-question-circle" style=" color: #fff; font-size: 1em; margin-top: -1.5%;"></i> </a>
					</div>
				</div>
				
				
				
				<br>
			
				
				<aside id="divimg2_login" class="container-fluid">
					<h1 id="h13_login">BEM VINDO(A)</h1>
					<div class="text-center">
					<img id="img_login2" src="Midia-20190412T161604Z-001/Midia/perfil.png" alt="icone secretaria">
					</div>
					<div id="divform_login" class="container-fluid">
					<form name="inicio" id="inicio" method="post" action="loginP.php">
						<label class="lbl_login" for="login"><i class="fas fa-users" style="font-size:0.8em;"></i> Login</label><br>
						<input class="input_login" type="text" name="login" id="login" placeholder="Nome de usuário"><br>
						
						<label class="lbl_login" for="senha"><i class="fas fa-lock" style="font-size:0.8em;"></i> Senha  </label><br>
					 	<input class="input_login" type="password" name="senha" id="senha" placeholder="********">
						
						<label class="lbl_login" for="perfil_login">Perfil</label><br>
						<select name="perfil_login" id="perfil_login" onChange="mostrafoto(perfil_login) " required>
						<option value="">-</option>
						<option value="cordenador">Cordenador(a)</option>
						<option value="educador">Educador(a)</option>
						<option value="secretaria">Secretaria</option>
						</select>
						<br>
					
						<div id="divbtn_login">
						<button class="btn btn-light" type="reset" id="btn1_login" onClick="limpar()"><i class="fas fa-times btn_login"></i></button>
							
						<button type="submit" class="btn btn-light" type="button" id="btn2_login"><i  class="fas fa-chevron-right btn_login " style="padding-left: 7px"></i></button>
						</div>
						<br>
						
						<div id="divbtn2_login">
						<button class="btn btn-light" type="reset" id="btn6_login" onClick="limpar()"><i class="fas fa-times btn_login"></i></button>
							
						<button class="btn btn-light" type="submit" id="btn5_login"><i  class="fas fa-chevron-right btn_login " style="padding-left: 7px"></i></button>
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
		  
		 function logar(){
			a=document.forms[0].id.value
			b=document.forms[0].senha.value
			
			if(a=="admin" && b=="admin"){
				alert("Login efetuado com sucesso !");
				location="novo_usuario.php"
			}
			else{
				alert("Usuario ou senha incorretos.")
				return false;
				
			}
		}
		  
		  function contato(){
			  location="contato.php";
		  }
		  function avaliar(){
			  location="avaliar.php";
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