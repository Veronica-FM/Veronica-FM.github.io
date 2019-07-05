<head>  
	  <style>
		  h1{
		  text-align: center; 
			  color:#a9a9a9; 
			  font-size: 1.8em; 
			  margin-top: 5px;
		  }
		  
		  p{
			  font-size:1.3em;
			  
		  }
		  
		 .btn{
			  padding: 13px;
			  font-size: 1.2em;
			 width: 17%
		  }
	  </style>
  </head>
	<body>
		<?php 
		session_start();
		require("conexao.php");
		$login = $_SESSION['login'];
		$senha = $_SESSION['senha'];
		try{
			$consulta = $conecta->query('select id, nome, perfil, login, senha from usuario where login="'.$login.'"and senha=md5("'.$senha.'")');
			$linha = $consulta->fetch(PDO::FETCH_ASSOC);

			if($linha['perfil']=="coordenador"){
				require("header_coord.php");
			}
			if($linha['perfil']=="secretaria"){
				require("header_secretaria.php");
			}
		}
		catch (Exception $erro) {
		echo 'Erro: ', $erro->getMessage(), "\n";
		}
		?>
		
			
		<main class="container" style="border: 1px solid #c9c9c9;border-radius: 6px; padding: 30px; margin-top:5px">
			
			<h1 class="text-primary" style="font-size: 1.95em; font-weight: 700;" >COMO CADASTRAR UM CURSO - PASSO A PASSO</h1><p style="text-align: center;font-size: 1.15em; font-weight: bold">*Caso ainda haja dúvidas após a leitura desse tópico, por favor, entre em contato.</p><hr>
			<div class="row" style="margin-bottom: 10px;">
			<span class="badge badge-primary" style="font-size:2em;"> 1 </span><h1 style="margin: 10px; ">Tela inicial :</h1>
				</div>
			<p>conforme impresso na imagem, sua interface inicia desse modo ou semelhante. Basta localizar onde se encontra o campo para digitação ("Digite um nome para o curso"). </p>
			<img class="img-thumbnail" src="Midia-20190412T161604Z-001/Midia/p1-1.jpg" alt="passo 1">
			<hr style="border-color: #c9c9c9;">
			<div class="row" style="margin-bottom: 10px;">
			<a href="#" class="badge badge-primary" style="font-size:2em;"> 2 </a><h1 style="margin: 10px; ">Digitando:</h1>
				</div>
			<p>Agora ficou fácil ! após localizar o campo, basta preencher com uma escolha válida não repetida. (não esqueça de verificar os predefinidos). </p>
			<img class="img-thumbnail" src="Midia-20190412T161604Z-001/Midia/p2-2.jpg" alt="passo 2">
				<hr style="border-color: #c9c9c9;"><div class="row" style="margin-bottom: 10px;">
			<a href="#" class="badge badge-primary" style="font-size:2em;"> 3 </a><h1 style="margin: 10px; ">Curso cadastrado</h1>
				</div>
			<p>Após o preencimento correto do campo obrigatório, você observará uma mensagem de sucesso, clique no botão "OK" e cadastre quantos cursos for necessário. Caso der erro siga as instruções recomendadas na propría página. <br>Fácil, né ? <i class="far fa-laugh-squint"></i></p>
			<img class="img-thumbnail" src="Midia-20190412T161604Z-001/Midia/p3-3.png" alt="passo 3">
				<hr style="border-color: #c9c9c9;">
			<div class="text-center">
			<button class="btn btn-primary" onclick="voltar();"><i class="fas fa-angle-double-left"></i> VOLTAR</button>
			<button class="btn btn-primary" onclick="ajuda();"><i class="fas fa-question"></i> AJUDA</button>
				</div>
		</main>
		
		<?php 
			require("Footer_coord.php");
		?>
		
		<script>
		function voltar(){
			location="novo_curso.php";
		}
		 function ajuda(){
			 location="contato.php";
		 }
		</script>
	</body>
</html>