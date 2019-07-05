<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ANVEGA | CHAMADA ON</title>
    <!-- Bootstrap CSS -->
	  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">  
	  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<link id="css" rel="stylesheet" type="text/css" href="indexcss.css">
	  
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	  
	<link rel="icon" type="image/x-icon" href="Midia-20190412T161604Z-001/Midia/icone.ico">
	 
	  <link href="https://fonts.googleapis.com/css?family=Oswald:700&display=swap" rel="stylesheet">
	  
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	  <style>
	  #btn_semcotra{
		display: none;
		}
	  </style>
  </head>
	
	
  <body id="bodyindex">
	  <header id="headerindex" class="container-fluid" style="background-color: #000; height: auto; width: 100%;">
	<div class="text-center" style="padding: 10px;">
	<a href="index.php"><img class="logoo" src="Midia-20190412T161604Z-001/Midia/logo4.png" alt="logo"></a>	
	 </div> 
	</header>
	
	<nav class="navbar navbar-dark navbar-expand-lg" style="background-color:#2D2D2D; width: 100%;">
	  <a class="navbar-brand mt-n1" href="#"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div   class="collapse navbar-collapse" id="navbarNav" >  
		<ul id="ul_index" class="navbar-nav">
		  <li id="li1_index" class="nav-item active licad">
			<i id="home_index" class="fas fa-home"></i><a id="a1_index"  class="nav-link"  href="#" >INICIO</a>
		  </li>
			<li  id="li2_index" class="nav-item active licad" style="border:none;" >
			<i  id="log_index" class="fas fa-sign-in-alt"></i><a id="a2_index"  class="nav-link" href="login.php" >LOGIN</a>
		  </li>
		</ul>
			 
	  </div>
		
		<button id="btnimpr"   style="color:#fff;width: 4%; height:auto; padding:5px; border-right: 1px solid #fff; outline:none; background-color: transparent; border:none; border-right: 1px solid #fff;" onClick="face()"><i class="fab fa-facebook-square" style="font-size: 2em; color: #fff; "></i></button>
		
				<button id="btnajud" style="color:#fff;width: 4%; height:auto; padding:5px; border-right: 1px solid #fff; outline:none; background-color: transparent; border:none;" onClick="tw()"><i class="fab fa-twitter-square" style="font-size: 2.2em; color: #fff;"></i></button>
	  </nav>
	  <main id="main_contraste" class="container-fuid">
		  <br><br>
	  	<div id="divtext_index" class="container-fluid" style="	background-color:rgba(0,0,0,0.50);">
			<div id="divtext2_index" class="container-fluid">
			<h1 class="h1_index" >UMA NOVA MANEIRA DE TRABALHAR</h1>
			<h1 class="h1cha_index" style="color:#000;">CHAMADA ONLINE DOM BOSCO</h1>
			<h2 id="h2_index">No computador, smartphone, tablet ou qualquer dispositivo. </h2>
			</div>
			
			
			<h5 id="h4_index">EXPERIMENTE JÁ</h5>
			<div id="divbtn_index" class="container">
				
			<button class="btn_index btn-dark" type="button" style="background-color: #f9f9f9; color:black; font-weight:bold; font-family: 'Oswald', sans-serif; " onClick="agenda();"><i id="calen_index" class="far fa-calendar-check" style="padding-right: 37px;"></i> VEJA NOSSO CALENDARIO </button><br ><br>
			
  			<button  class="btn_index btn-dark" type="button" style="background-color: #f9f9f9; 9;color:black;font-weight:bold; font-family: 'Oswald', sans-serif;" onClick="site();"><i id="site_index" class="far fa-hand-point-right" style="padding-right: 40px;"></i> CONSULTE NOSSO SITE</button><br><br>
			
			<button class="btn_index btn-dark" style="background-color: #f9f9f9; 9;color:black;font-weight:bold; font-family: 'Oswald', sans-serif; "onclick="contraste();"><i id="contr_index" class="far fa-lightbulb" style="padding-right: 60px;"></i>CONTRASTE PADRÃO</button>
  			</div>
	  	</div>
		 
		  <hr class="hrindex">
		 
			<h5 id="h42_index">EXPERIMENTE JÁ</h5>
		
		  <div id="divbtn2_index">
		  	<button class="btn2_index" type="button" style="background-color: #f9f9f9; 9;color:black;" onClick="agenda();"><i id="calen2_index" class="far fa-calendar-check"></i> VEJA NOSSO CALENDARIO</button><div style="padding-bottom: 10px;"></div>
			
  			<button class="btn2_index" type="button" style="background-color: #f9f9f9; 9;color:black;" onClick="site();"><i id="site2_index" class="far fa-hand-point-right"></i> CONSULTE NOSSO SITE</button><div style="padding-bottom: 10px;"></div>
			
			<button class="btn2_index trocacssbtn" style="background-color: #f9f9f9; 9;color:black;" ><i id="contr2_index" class="far fa-lightbulb" onclick="contraste();"></i>CONTRASTE PADRÃO</button>
  		</div>
		 <div id="divtext3_index" class="text-center">
			 <h1 style="color:#000;" id="economize">Economize tempo &#10004; / Trabalhe com tecnologia &#10004; / Versatilidade &#10004;</h1> 
		  </div>
		  <br>
		  
		  
		  
	  </main>
	  <div class="container-fluid" style="width: 100%; height: 120px; background-color:#2D2D2D;; padding-top: 10px;" >
		<div id="div_imgroda1" class="text-center">
		 <a href="contato.php"><img id="imgroda1" class="float-left"  src="Midia-20190412T161604Z-001/Midia/rating%20(1).svg" alt="Icone pag. Avaliação" ></a>
		</div>
		  <div id="div_imgroda2" class="text-center">
		  <a href="contato.php"><img  id="imgroda2" class="float-right" src="Midia-20190412T161604Z-001/Midia/messaging.svg" alt="Icone pag. Contato"></a>
		</div>
	  </div>
	  <div id="imgroda3" class="container-fluid">
	  <img id="imgroda4" class="img-fluid" src="Midia-20190412T161604Z-001/Midia/school-transparent-clear-background-5-original.png" alt="obra social">
	<img id="imgroda5" class="img-fluid" src="Midia-20190412T161604Z-001/Midia/services_imgC.png" alt="obra social">
	  </div>
	  <?php 
	require("Footer_idexCon.php");
		?>
	  <script>
		
		function typeWriter(elemento) {
			const textoArray = elemento.innerHTML.split('');
			elemento.innerHTML= '';
			textoArray.forEach(function(letra, i){
			setTimeout(function(){
					   elemento.innerHTML += letra;
					   }, 85* i)
		});
		
		}
	const titulo = document.querySelector('#economize');
	typeWriter(titulo);
	
	  
	  	function site(){
		 location="http://www.domboscoitaquera.org.br/";
		 
		}
		  function agenda(){
		location="https://calendar.google.com/calendar/b/1?cid=YW52ZWdhNjI0QGdtYWlsLmNvbQ";
		}
		
		 function face(){
			  location="https://www.facebook.com/domboscoitaquera/"
		  }
		  
		  function tw(){
			  location="https://twitter.com/osdb"
		  }
		  
		function contraste(){
			location="index.php"
		}
		  
	  </script>

  </body>
</html>