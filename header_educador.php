<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="indexcss.css"> 
	  
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
	  
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	   <style>
	  
		  #icom{
			  width:25px;
			  height: auto;
		  }
		   
	
	  </style>
  	</head>
	<body>	
   	<header id="headercad" class="container-fluid" style="background-color: #9dd0e7; height: auto; width: 100%;">
	<div class="text-center" style="padding: 10px;">
	<a href="index.php"><img class="logoo" src="Midia-20190412T161604Z-001/Midia/logo4.png" alt="logo"></a>
	</div>
	</header>
	  
	<nav class="navbar navbar-dark navbar-expand-lg" style="background-color:#011E49; width: 100%;">
	  <a class="navbar-brand mt-n1" href="#" style="border-right: 1px solid #c9c9c9; padding-left: 2%; padding-right: 1%; font-size: 1.5em;">Menu</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" onMouseOver="mudaicom()" onMouseOut="muda2icom()" >
		<img id="icom" src="Midia-20190412T161604Z-001/Midia/menu.png">
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
		  <li  class="nav-item active licad">
			<a  class="nav-link" style="font-size: 1.2em;" href="painel.php">Fazer chamada</a>
		  </li>
			<li  class="nav-item licad" style="border: none;" >
			<a  style="font-size: 1.2em;" class="nav-link" href="relatorio.php">Verificar chamadas</a>
			</li>
			
			
		  
		</ul>
	  </div>
				<button id="btnimpr"   style="color:#fff;width: 4%; height:auto; padding:5px; border-right: 1px solid #fff; outline:none; background-color: transparent; border:none; border-right: 1px solid #fff;" onClick="face();"><i class="fab fa-facebook-square" style="font-size: 2em; color: #fff; "></i></button>
		
				<button id="btnajud" style="color:#fff;width: 4%; height:auto; padding:5px; border-right: 1px solid #fff; outline:none; background-color: transparent; border:none;" onClick="tw();"><i class="fab fa-twitter-square" style="font-size: 2.2em; color: #fff;"></i></button>
		
					<button id="btnsair" style="color:#fff;width: 4%; height:auto; padding:5px; outline:none; background-color: transparent; border:none; border-left: 1px solid #fff;" title="Sair" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-power-off" style="font-size: 2em; color: #fff;"></i></button>
		
									<!-- Button trigger modal -->
					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Encerrar sessão</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
							Relmente deseja sair ?
						  </div>
						  <div class="modal-footer">
							  <button type="button" class="btn btn-primary" onClick="sair();">SIM</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">NÃO</button>
						  </div>
						</div>
					  </div>
					</div>
	</nav>
	
	<script>
	
		function face(){
			  location="https://www.facebook.com/domboscoitaquera/"
		  }
		  
		  function tw(){
			  location="https://twitter.com/osdb"
		  }
		function sair(){
			  location="logout.php"
		  }
		 function mudaicom(){
            document.getElementById("icom").src="Midia-20190412T161604Z-001/Midia/close.png";
        }
		 function muda2icom(){
            document.getElementById("icom").src="Midia-20190412T161604Z-001/Midia/menu.png";
        }
		
	</script>

  
  </body>
</html>