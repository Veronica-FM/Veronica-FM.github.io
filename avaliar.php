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
	  
	<link rel="icon" type="image/x-icon" href="Midia-20190412T161604Z-001/Midia/avaliacao.ico">
	  
    <title>Avaliar</title>
	
	  
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
			width: 30%;
			background-image: url("Midia-20190412T161604Z-001/Midia/fundos.png");
			background-position: center;
			background-attachment: scroll;
			background-repeat: no-repeat;
			background-size:cover;
			overflow: hidden;
			  height: 690px;
		  }
		  
		#meio_login{
			width: 100%;
			height: 690px;
			padding: 0px;
			
		  }
		  
		  #divimg2_usu{
			  height: 690px;
			width:70%;
			
			margin-top: 0px;
			background-color:rgba(0,0,0,0.40);
			 

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
			height: 120px;
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
		  
		  .p_ava{
			font-size:1em;
			color:#fff;
			font-weight: 500;
			padding: 0px;
			margin-right: 5%;
			 margin-top: 5px;
			}
		  .someP{
				  display:none;
			  }
		    
		   #someRds{
				   display:inline-flex;
			  }
		  
			   #someRmb{
				  display:none;
			  }
		  .icoo{
			  animation-duration:1.2s;
			  animation-iteration-count: infinite;
		  }
		
		#h13_login{margin-right: 70px;}
		  
		  
		  	  @media screen and (max-width:768px){
			  .btn_cont{
			  width: 50px;; 
		  }
			  .p_ava{
				 display:none;
			  } 
			  .someP{
				 display:block;
			  } 
			  
			  #someRds{
				 display:none;
			  }
		  
			   #someRmb{
				    display:inline-flex;
			  }
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
				height: auto;
			  }
		  
			#meio_login{
			width: 100%;
				margin: 0px;
				height: auto;
		  	}
		  
		  #divimg2_usu{
			width: 100%;
			float: inherit;
			margin-right: 0%;
			margin-top: 0px;
			  height: auto;

			}
		 .p_ava{
			margin-right: 4%;
			  }
			  #h13_login{font-size:1.7em;}
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
				height: auto;
			  }
		  
			#meio_login{
			width: 100%;
				margin: 0px;
				height: auto;
		  	}
		  
		  #divimg2_usu{
			width: 100%;
			float: inherit;
			margin-right: 0%;
			margin-top: 0px;
			  height: auto;

			}
		 .p_ava{
			margin-right: 4%;
			  }
			  #h13_login{font-size:1.7em;}
		  } 
		  
		  @media screen and (max-width:450px){
			  .btn_cont{
			  width: 50px;; 
		  }
			  .p_ava{
				 display:none;
			  } 
			  .someP{
				 display:block;
			  } 
			  
			  #someRds{
				 display:none;
			  }
		  
			   #someRmb{
				    display:inline-flex;
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
			<i id="home_index" class="fas fa-medal"></i><a id="a1_index"  class="nav-link"  href="#" >AVALIAR</a>
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
					<form name="avaliar" id="avaliar" method="post" action="cadastrar_ava.php">
						<i class="fas fa-bell animated tada icoo" style="float: left; color:azure; font-size: 2.2em; margin-top: 10px;" data-toggle="modal" data-target="#modalExemplo"></i>
						
						<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Caro usuário, </h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body" id="bodyModal">
								<p>Por favor, preencha este formulário de avaliação da página em que navegou. Cada informação descrita será totalmente confidencial. Sua sugestão e comentario (principalmente) servirá para nosso progresso e melhoria. Contamos com o seu apoio. <i class="far fa-laugh-squint"></i></p>
								  
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
							  </div>
							</div>
						  </div>
						</div>
					<h1 id="h13_login" >FORMULÁRIO DE AVALIAÇÃO</h1>
					<div   id="divform_login" class="container-fluid">
						
					
						
					
						
  <div class="col-12">
    <div class="list-group" id="list-tab" role="tablist" >
      <a class="list-group-item list-group-item-action btn-light active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"  style="background-color: transparent; color: #fff; border-color:#fff; font-weight: 600"><i class="fas fa-plus"></i> Como avalia nossos serviços no geral ?</a>
    <div class="tab-content " id="nav-tabContent"  style=" padding: 0px; border: 1px solid#fff; border-radius: 4px;  margin: 0px; border-top:none;">
		<div class="tab-pane fade show col-12 row active" id="list-home" role="tabpanel" aria-labelledby="list-home-list" style=" padding: 0px;margin: 0px;">
			<div id="div_pDS" class="row col-12" style=" padding: 0px; margin-bottom: -10px;">
				<p class="p_ava" style="margin-left: 17%;">Muito Bom</p>
				<p class="p_ava someP" style="margin-left: 25%;">Bom</p>
				<p class="p_ava someP">Relevante</p>
				<p class="p_ava someP">Ruim</p>
				<p class="p_ava">Bom</p>
				<p  class="p_ava">Ruim</p>
				<p  class="p_ava">Muito Ruim</p>
			</div>
			<div  id="someRds" class="row col-12" style=" padding: 0px; margin: 0px;">
				
					<div class="custom-control custom-radio " style="margin-left:20%;" >
						<input type="radio" id="SGmb"  value="muito_bom" name="Servico" class="custom-control-input">
						<label class="custom-control-label" for="SGmb"></label>
					</div>
					<div class="custom-control custom-radio" style="margin-left:12.2%;">
						<input type="radio" id="SGb" value="bom" name="Servico" class="custom-control-input">
						<label class="custom-control-label" for="SGb"></label>
					</div>
					<div class="custom-control custom-radio" style="margin-left:7.2%;">
						<input type="radio" id="SGr"  value="ruim" name="Servico" class="custom-control-input">
						<label class="custom-control-label" for="SGr"></label>
					</div>
					<div class="custom-control custom-radio" style="margin-left:12.2%;">
						<input type="radio" id="SGmr" value="muito_ruim" name="SG" class="custom-control-input">
						<label class="custom-control-label" for="SGmr"></label>
					
				</div>
			</div>
			<div id="someRmb" class="row col-12" style=" padding: 0px; margin: 0px;">
					<div class="custom-control custom-radio " style="margin-left:24%;" >
						<input type="radio" id="SGbo" value="boom" name="Servico" class="custom-control-input">
						<label class="custom-control-label" for="SGbo"></label>
					</div>
					<div class="custom-control custom-radio" style="margin-left:12.2%;">
						<input type="radio" id="SGru" value="relevante" name="Servico" class="custom-control-input">
						<label class="custom-control-label" for="SGru"></label>
					</div>
					<div class="custom-control custom-radio" style="margin-left:12.2%;">
						<input type="radio" id="SGrr" value="ruiim" name="Servico" class="custom-control-input">
						<label class="custom-control-label" for="SGrr"></label>
					</div>
				</div>
			</div>
		</div>
	  </div>
    </div> 
<hr style=" border: 1.5px dotted #b9b9b9;">
	<div class="col-12">
    <div class="list-group" id="list-tab" role="tablist" >
      <a class="list-group-item list-group-item-action btn-light" id="list-home-list" data-toggle="list" href="#list-home2" role="tab" aria-controls="home2"  style="background-color: transparent; color: #fff; border-color:#fff;"><i class="fas fa-plus"></i> Como avalia o design (aparência) das páginas no geral ?</a>
    <div class="tab-content " id="nav-tabContent"  style=" padding: 0px; border: 1px solid#fff; border-radius: 4px;  margin: 0px; border-top:none;">
		<div class="tab-pane fade show col-12 row" id="list-home2" role="tabpanel" aria-labelledby="list-home2-list" style=" padding: 0px;margin: 0px;">
			<div id="div_pDS" class="row col-12" style=" padding: 0px; margin-bottom: -10px;">
				<p class="p_ava" style="margin-left: 17%;">Muito Bom</p>
				<p class="p_ava someP" style="margin-left: 25%;">Bom</p>
				<p class="p_ava someP">Relevante</p>
				<p class="p_ava someP">Ruim</p>
				<p class="p_ava">Bom</p>
				<p  class="p_ava">Ruim</p>
				<p  class="p_ava">Muito Ruim</p>
			</div>
			<div  id="someRds" class="row col-12" style=" padding: 0px; margin: 0px;">
				
					<div class="custom-control custom-radio " style="margin-left:20%;" >
						<input type="radio" id="DGmb"  value="muito_bom" name="Design" class="custom-control-input">
						<label class="custom-control-label" for="DGmb"></label>
					</div>
					<div class="custom-control custom-radio" style="margin-left:12.2%;">
						<input type="radio" id="DGb" value="bom" name="Design" class="custom-control-input">
						<label class="custom-control-label" for="DGb"></label>
					</div>
					<div class="custom-control custom-radio" style="margin-left:7.2%;">
						<input type="radio" id="DGr" value="ruim" name="Design" class="custom-control-input">
						<label class="custom-control-label" for="DGr"></label>
					</div>
					<div class="custom-control custom-radio" style="margin-left:12.2%;">
						<input type="radio" id="DGmr" value="muito_ruim" name="Design" class="custom-control-input">
						<label class="custom-control-label" for="DGmr"></label>
					
				</div>
			</div>
			<div id="someRmb" class="row col-12" style=" padding: 0px; margin: 0px;">
					<div class="custom-control custom-radio " style="margin-left:24%;" >
						<input type="radio" id="DGbo" value="boom" name="Design" class="custom-control-input">
						<label class="custom-control-label" for="DGbo"></label>
					</div>
					<div class="custom-control custom-radio" style="margin-left:12.2%;">
						<input type="radio" id="DGru" value="relevante" name="Design" class="custom-control-input">
						<label class="custom-control-label" for="DGru"></label>
					</div>
					<div class="custom-control custom-radio" style="margin-left:12.2%;">
						<input type="radio" id="DGrr" value="ruiim" name="Design" class="custom-control-input">
						<label class="custom-control-label" for="DGrr"></label>
					</div>
				</div>
			</div>
		</div>
	  </div>
    </div>
	<hr style=" border: 1.5px dotted #b9b9b9;">
	<div class="col-12">
    <div class="list-group" id="list-tab" role="tablist" >
      <a class="list-group-item list-group-item-action btn-light" id="list-home-list" data-toggle="list" href="#list-home3" role="tab" aria-controls="home3"  style="background-color: transparent; color: #fff; border-color:#fff;"><i class="fas fa-plus"></i> Como avalia a funcionalidade das páginas no geral ?</a>
    <div class="tab-content " id="nav-tabContent"  style=" padding: 0px; border: 1px solid#fff; border-radius: 4px;  margin: 0px; border-top:none;">
		<div class="tab-pane fade show col-12 row" id="list-home3" role="tabpanel" aria-labelledby="list-home3-list" style=" padding: 0px;margin: 0px;">
			<div id="div_pDS" class="row col-12" style=" padding: 0px; margin-bottom: -10px;">
				<p class="p_ava" style="margin-left: 17%;">Muito Bom</p>
				<p class="p_ava someP" style="margin-left: 25%;">Bom</p>
				<p class="p_ava someP">Relevante</p>
				<p class="p_ava someP">Ruim</p>
				<p class="p_ava">Bom</p>
				<p  class="p_ava">Ruim</p>
				<p  class="p_ava">Muito Ruim</p>
			</div>
			<div  id="someRds" class="row col-12" style=" padding: 0px; margin: 0px;">
				
					<div class="custom-control custom-radio " style="margin-left:20%;" >
						<input type="radio" id="FGmb" value="muito_bom" name="Funcionalidade" class="custom-control-input">
						<label class="custom-control-label" for="FGmb"></label>
					</div>
					<div class="custom-control custom-radio" style="margin-left:12.2%;">
						<input type="radio" id="FGb" value="bom" name="Funcionalidade" class="custom-control-input">
						<label class="custom-control-label" for="FGb"></label>
					</div>
					<div class="custom-control custom-radio" style="margin-left:7.2%;">
						<input type="radio" id="FGr" value="ruim" name="Funcionalidade" class="custom-control-input">
						<label class="custom-control-label" for="FGr"></label>
					</div>
					<div class="custom-control custom-radio" style="margin-left:12.2%;">
						<input type="radio" id="FGmr" value="muito_ruim" name="Funcionalidade" class="custom-control-input">
						<label class="custom-control-label" for="FGmr"></label>
					
				</div>
			</div>
			<div id="someRmb" class="row col-12" style=" padding: 0px; margin: 0px;">
					<div class="custom-control custom-radio " style="margin-left:24%;" >
						<input type="radio" id="FGbo" value="boom" name="Funcionalidade" class="custom-control-input">
						<label class="custom-control-label" for="FGbo"></label>
					</div>
					<div class="custom-control custom-radio" style="margin-left:12.2%;">
						<input type="radio" id="FGru" value="relevante" name="Funcionalidade" class="custom-control-input">
						<label class="custom-control-label" for="FGru"></label>
					</div>
					<div class="custom-control custom-radio" style="margin-left:12.2%;">
						<input type="radio" id="FGrr" value="ruiim" name="Funcionalidade" class="custom-control-input">
						<label class="custom-control-label" for="FGrr"></label>
					</div>
				</div>
			</div>
		</div>
	  </div>
    </div>
	
						<textarea name="mensagem_ava" placeholder="Deixe aqui um comentário ou sugestão ..." ></textarea><br>
					
						<div class="text-center" style="margin-top: 2px;" id="divbtn_cont">
						<button class="but animated pulse btn_cont btn btn-light" type="reset"><i class="fas fa-times "> Limpar</i> </button>
							
						<button type="submit" class="but animated pulse btn_cont btn btn-light" type="button" ><i class="fas fa-angle-double-right" style="padding-left: 7px"> ENVIAR</i></button>
						</div>
						<br>
						
						<div class="text-center" id="divbtn2_login">
						<button class="btn_cont btn btn-light but animated pulse" type="reset"><i class="fas fa-times " style="font-size: 1.4em;"> </i> </button>
							
						<button type="submit" class="but animated pulse btn_cont btn btn-light" type="button"><i class="fas fa-angle-double-right" style="font-size: 1.4em;"> </i></button>
						</div>
						</form>
						
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