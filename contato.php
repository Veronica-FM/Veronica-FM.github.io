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
	  
	<link rel="icon" type="image/x-icon" href="Midia-20190412T161604Z-001/Midia/contato.ico">
	  
    <title>Contato</title>
	
	  
	  <style>
		  
		  #icom{
			  width:25px;
			  height: auto;
		  }
		  
		    .but{
			  animation-duration: 0s;
		  }
		  .but:hover{
			  animation-duration: 0.7s;
			  animation-iteration-count: infinite;
		  }  
		  
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
		  
		  #divimg_login{
			width: 36%;
			background-image: url("Midia-20190412T161604Z-001/Midia/fundos.png");
			background-position: center;
			background-attachment: scroll;
			background-repeat: no-repeat;
			background-size:cover;
			overflow: hidden;
		  }
		  
		#meio_login{
			width: 100%;
		  }
		  
		  #divimg2_usu{
			width:63.8%;
			margin-right: 0.2%;
			margin-top: 0px;

		}
		  
		  #menucontato{
	margin: 15% 15%;
	position: relative;
	
}
		  
		  #menucontato .ulcont #endereco,#menucontato .ulcont #telefone,#menucontato .ulcont #contato{
		text-decoration: none;
		list-style:url("Midia-20190412T161604Z-001/Midia/endereco.png");
		color:#Fff;
		font-size: 1.5em;
		font-weight: bold;
		}
		#menucontato .ulcont #telefone{
			list-style-image:url("Midia-20190412T161604Z-001/Midia/telefone.png");
		}
		#menucontato .ulcont #contato{
			list-style: url("Midia-20190412T161604Z-001/Midia/email.png");
		}
		  .licont{
			  text-transform:none;
			  list-style: none;
			  font-size: 0.85em;
			  font-weight: 400;
			  cursor: pointer;
			  color:#c9c9c9;
		  }
		  .licont:hover{
			  font-size: 0.95em;
			  font-weight: 400;
			  color:#e9e9e9;
		  }
		
		  
		  textarea{
			margin-top: 20px;
			height: 180px;
			width: 100%;
			background-color: rgba(255,255,255,0.7);
			resize: none;
			overflow: auto;
			font-size: 1.3em;
			outline: none;
			 border: none;
		  }
		  
		  textarea::placeholder {
			font-size: 1.3em;
			font-family: 'TimesNewRoman';
			text-align: center;
			}
		  
		  #divform_login{
			  margin-top: 10px;
			  width: 80%;
			  margin-left: 8%;
		  }
		  
		  .btn_cont{
			  background-color: transparent;
			  border:2px solid #c9c9c9; 
			  font-size: 1.2em; 
			  width: 25%; 
			  margin-right: 5px;
			  color:#fff;
		  }
		  
		  .lbl_login,#h13_login{
			  font-weight:600;
		  }
		  @media screen and (max-width:765px){
			    .btn_cont{
			  width: 20%; 
		  }
			  
			  #divbtn_cont{display: none;}
			
			#divform_login{
			 width: 90%;
				margin-left: 5%;
		  	}  
			  
			#menucontato{
			margin-top: 5%;
			position: relative;
			}
			  
			#divimg_login{
			width: 100%;
			margin: 0px;
				float: inherit;
			  }
		  
			#meio_login{
			width: 100%;
				margin: 0px;
		  	}
		  
		  #divimg2_usu{
			width: 100%;
			float: inherit;
			margin-right: 0%;
			margin-top: 0px;

			}
		  } 
		  
		  @media screen and (max-width:450px){
			  .btn_cont{
			  width: 50px;; 
		  }
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
			<i id="home_index" class="fas fa-envelope-open"></i><a id="a1_index"  class="nav-link"  href="#" >CONTATO</a>
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
	  
			<div id="meio_login" class="container">
				<div id="divimg_login" class="container-fluid">	
					<nav id="menucontato">
					<ul class="ulcont">
					<li class="lititulo" id="endereco" style="text-transform: uppercase;">Endereço
						<ul class="ulcont">
						<li class="licont"> R. Álvaro de Mendonça, 456 - Itaquera, São Paulo - SP, 08215-290 </li>
						</ul>	
					</li>
						<br>
						<br>
					<li class="lititulo"  id="telefone">Telefone
						<ul class="ulcont">
						<li class="licont"> (11) 2205-1100 </li>
						</ul>	
					</li>
						<br>
						<br>
					<li class="lititulo"  id="contato">E-mail
						<ul class="ulcont">
						<li class="licont"> Anvega624@gmail.com</li>
						</ul>	
					</li>
					</ul>	
					</nav>
				</div>
				
			
				<aside  id="divimg2_usu" class="container-fluid">
					<h1 id="h13_login">ENVIE UMA MENSAGEM</h1>
					<div   id="divform_login" class="container-fluid">
						
					<form name="contato" id="novo_usuario" method="post" action="cadastrar_contato.php" onSubmit="return valida();" >
						
						<label class="lbl_login" for="nome_cont"><i class="fas fa-users" style="font-size:0.8em;"></i> Nome:</label><br>
						<input class="input_login" type="text" name="nome_cont" id="nome_cont" placeholder="Nome Completo" required style="margin-bottom: 13px;"><br>
						
						<label class="lbl_login" for="login"><i style="font-size: 0.9em;" class="fas fa-envelope"></i> Email:</label><br>
						<input class="input_login" type="email" name="email_cont" id="email_cont" placeholder="SeuEmail@email.com" require  style="margin-bottom: 13px;"><br>
						
						<label class="lbl_login" for="login"><i style="font-size: 0.9em;" class="far fa-address-card"></i> Perfil:</label><br>
						<select name="perfil_cont" id="perfil_login" required>
						<option value="" selected disabled>Seu Perfil</option>
						<option value="coordenador">Coordenador</option>
						<option value="secretaria">Secretaria</option>
						<option value="educador">Educador</option>
						</select>
						<br >
						
						<textarea name="mensagem_cont" placeholder="Digite aqui ... " required></textarea><br>
						
						<div class="text-center" style="margin-top: 10px;" id="divbtn_cont">
						<button class="but animated pulse btn_cont btn btn-light" type="reset"><i class="fas fa-times "> Limpar</i> </button>
							
						<button type="submit" class="but animated pulse btn_cont btn btn-light" type="button" ><i class="fas fa-angle-double-right" style="padding-left: 7px"> ENVIAR</i></button>
						</div>
						<br>
						
						<div class="text-center" id="divbtn2_login">
						<button class="btn_cont btn btn-light but animated pulse" type="reset"><i class="fas fa-times " style="font-size: 1.4em;"> </i> </button>
							
						<button type="submit" class="but animated pulse btn_cont btn btn-light" type="button"><i class="fas fa-angle-double-right" style="font-size: 1.4em;"> </i></button>
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