<!doctype html>
<html>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<!-- Adicionando Javascript -->
    <script>

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#estado").val("");
                //$("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#estado").val("...");
                       // $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#estado").val(dados.uf);
                               // $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
	<script>

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua_func").val("");
                $("#bairro_func").val("");
                $("#cidade_func").val("");
                $("#estado_func").val("");
                //$("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep_func").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua_func").val("...");
                        $("#bairro_func").val("...");
                        $("#cidade_func").val("...");
                        $("#estado_func").val("...");
                       // $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua_func").val(dados.logradouro);
                                $("#bairro_func").val(dados.bairro);
                                $("#cidade_func").val(dados.localidade);
                                $("#estado_func").val(dados.uf);
                               // $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
</head>	

	<main id="maincad" class="container-fluid">	
	<br>	
	<label id="lblperfil">PERFIL:</label>
	<form>	
	<div id="perfil" class="container-fluid">
			<div id="contaluno">
			<img id="imgaluno" src="Midia-20190412T161604Z-001/Midia/backpack.png" class="img-thumbnail" alt="sdsd"><br>
		<div id="radioaluno" class="custom-control custom-radio custom-control-inline" >
		  <input type="radio" id="aluno" name="perfil" class="custom-control-input" onClick="mostradiv()">
		  <label class="custom-control-label" for="aluno">ALUNO(A)</label>
		</div>
		</div>
			
			<div id="contprof">
		<img id="imgprof" src="Midia-20190412T161604Z-001/Midia/teacher.png" class="img-thumbnail" alt="sdsd" ><br>	
		<div id="radioprof" class="custom-control custom-radio custom-control-inline" >
		  <input type="radio" id="prof" name="perfil" class="custom-control-input" onClick="mostradiv2()">
		  <label class="custom-control-label" for="prof">FUNCIONÁRIO(A)</label>
		</div>
		</div>
			
		</div>
	</form>
		<br class="br1cad">
		<hr class="hrcad">
		
		<h1 id="h1cad" class="teste animated fadeInLeft" style="display:none;">FORMULÁRIO ALUNO(A)</h1>
		
	<div id="alunof" class="teste container-fluid animated fadeInUp" style="display:none;">
	
		<form name="cadastro_aluno" method="post" action="cadastrar_aluno.php">
		<div class="form-row">
	  
		  
    <div class="form-group col-md-6">
      <label for="nome">Nome</label>
      <input type="text" class="form-control"  name="nome" id="nome" required placeholder="Digite o nome completo">
    </div> 
	  <div class="form-group col-md-2">
      <label for="nis">NIS</label>
      <input type="text" class="form-control" id="nis" name="nis" placeholder="000000">
    </div>
	  <div class="form-group col-md-2">
      <label for="celular">Celular</label>
        <input type="tel" class="form-control" name="celular" id="celular" placeholder="(00) 00000-0000" required>
    </div>
	  <div class="form-group col-md-2">
      <label for="telefone">Telefone</label>
        <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="(00) 0000-0000" required>
    </div>
	  <div class="form-group col-md-2">
      <label id="lbldata2" for="data">Data de nascimento</label> <label class="lbldata1" for="data">Data nasc.</label>
      <input type="date" class="form-control" name="data" id="data" required>
	  </div>
	  <div class="form-group col-md-2">
    <label for="">Foto(3x4)</label>
    <input type="file" class="form-control-file">
  </div>
	  <div class="form-group col-md-2">
      <label for="rg">RG</label>
      <input type="text" class="form-control"  name="rg" id="rg" placeholder="00.000.000-0" required>
    </div>
	  <div class="form-group col-md-2">
      <label for="cpf">CPF</label>
      <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" required>
	  </div> 
		<label class="lblsexo" style="font-size: 1.2em; margin-left: 1.3%;">Sexo</label>
		<div class="lblmas custom-control custom-radio custom-control-inline">
	  <input  type="radio" id="customRadioInline3" name="customRadioInline4" class="custom-control-input">
	  <label class="custom-control-label" for="customRadioInline3" >Masculino</label>
	</div>
	  <div class="lblfem femcustom-control custom-radio custom-control-inline">
	  <input type="radio" id="customRadioInline4" name="customRadioInline4" class="custom-control-input">
	  <label class="custom-control-label" for="customRadioInline4" >Feminino</label>
	</div>
	  <div class="form-group col-md-2">
      <label for="cep">CEP</label>
      <input type="text" class="form-control" name="cep" id="cep" placeholder="00000-000" required>
    </div>
	  <div class="form-group col-md-3">
		<label for="rua">Rua</label>
      <input type="text" class="form-control" name="rua" id="rua" placeholder="R. Digite a rua">
    </div>
	  <div class="form-group col-md-2">
      <label for="bairro">Bairro</label>
      <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Digite o bairro" required>
    </div>
	  <div class="form-group col-md-1">
      <label for="numero">Numero</label>
      <input type="number" class="form-control"  name="numero" id="numero" placeholder="00">
    </div>
	  <div class="form-group col-md-2">
      <label for="cidade">Cidade</label>
      <input type="text" class="form-control" name="cidade" id="cidade" placeholder="São Paulo">
    </div>
	  <div class="form-group col-md-2">
      <label for="estado">Estado</label>
      <input type="text" class="form-control" name="estado" id="estado" placeholder="São Paulo">
    </div>
	   <div class="col-auto my-1">
      <div class="custom-control custom-checkbox mr-sm-2 ml-2 mt-n2">
        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
        <label class="custom-control-label" for="customControlAutosizing" >Lembrar preferências</label>
      </div>
    </div>  
	  <hr class="hrcad2">
	  <br>
	    <button id="btn1cad" type="reset" class="btn  but animated pulse" style="background-color:#9dd0e7; color:#E5E5E5; margin-left: 22px;"><i class="fas fa-broom"></i> LIMPAR</button>
	  
	  <button id="btn2cad" type="submit" class="btn  but animated pulse" style="background-color:#9dd0e7;color:#E5E5E5;margin-left: 7px;"><i class="fas fa-save"></i> SALVAR</button>
	  
	  <button  id="btn3cad" type="button" class="btn  but animated pulse" style="background-color:#9dd0e7; color:#E5E5E5;margin-left: 7px;" onClick="ocultadiv()"><i class="fas fa-times"></i> FECHAR</button> 
	  
	  <button id="btn4cad" type="reset" class= "btn  but animated pulse" style="background-color:#9dd0e7; color:#E5E5E5; margin-left: 10px;"><i class="fas fa-broom" style="font-size: 1.5em;"></i> </button>
	  
	  <button id="btn5cad" type="submit" class=" btn  but animated pulse" style="background-color:#9dd0e7;color:#E5E5E5;margin-left: 7px;"><i class="fas fa-save"  style="font-size: 1.5em;"></i></button>
	  
	  <button id="btn6cad" type="button" class=" btn  but animated pulse" style="background-color:#9dd0e7; color:#E5E5E5;margin-left: 7px;" onClick="ocultadiv()"><i class="fas fa-times"  style="font-size: 1.5em;"></i></button>
		</div>
		</form>
		</div>
		
	<h1 id="h1cad1" class="teste animated fadeInLeft" style="display:none;">FORMULÁRIO FUNCIONÁRIO(A)</h1>
		
	<div id="proff" class="teste container-fluid animated fadeInUp" style="display: none;">
	
	<form name="novo_funcionario" method="post" action="cadastrar_funcionario.php">
		
  	<div class="form-row">
	  
		  
    <div class="form-group col-md-6">
      <label for="nome_func">Nome</label>
      <input class="form-control" type="text" name="nome_func" id="nome_func" placeholder="Nome Completo" maxlength="40" required>
    </div> 
	  <div class="form-group col-md-2">
      <label for="matricula">Matricula Func.</label>
      <input type="text" class="form-control" id="matricula" name="matricula" placeholder="000000" required>
    </div>
	  <div class="form-group col-md-2">
      <label for="telefone_func">Telefone</label>
        <input type="tel" class="form-control" name="telefone_func" id="telefone_func" placeholder="(00) 0000-0000" required>
    </div>
	  <div class="form-group col-md-2">
      <label for="celular_func">Celular</label>
        <input type="tel" class="form-control" name="celular_func" id="celular_func" placeholder="(00) 00000-0000" required>
    </div>
	 <div class="form-group col-md-2">
      <label id="lbldata2" for="data_func">Data de nascimento</label> <label class="lbldata1" for="data_func">Data nasc.</label>
      <input type="date" class="form-control" name="data_func" id="data_func" required>
	  </div>
	  <div class="form-group col-md-2">
    <label for="foto">Foto(3x4)</label>
    <input type="file" class="form-control-file" id="foto" name="foto">
  </div>
	  <div class="form-group col-md-2">
      <label for="rg_func">RG</label>
      <input type="text" class="form-control" id="rg_func" name="rg_func" placeholder="99.999.999-9" required>
    </div>
	  <div class="form-group col-md-2">
      <label for="cpf_func">CPF</label>
      <input type="text" class="form-control" id="cpf_func" name="cpf_func" placeholder="999.999.999-99" required>
	  </div> 
	<label  class="lblsexo" style="font-size: 1.2em; margin-left: 1.3%;">Sexo</label>
		<div class="lblmas custom-control custom-radio custom-control-inline">
	  <input  type="radio" id="masculino_funci" name="radio_funci" class="custom-control-input" value="masculino_funci" required>
	  <label class="custom-control-label" for="masculino_funci">Masculino</label>
	</div>
	  <div class="lblfem femcustom-control custom-radio custom-control-inline">
	  <input type="radio" id="femenino_funci" name="radio_funci" class="custom-control-input"  value="femenino_funci" required>
	  <label class="custom-control-label" for="femenino_funci" >Feminino</label>
	</div>
	  <div class="form-group col-md-2">
      <label for="cep_func">CEP</label>
      <input type="text" class="form-control" id="cep_func" name="cep_func" placeholder="00000-000" required>
    </div>
	  <div class="form-group col-md-3">
		<label for="rua_func">Rua</label>
      <input type="text" class="form-control" id="rua_func" name="rua_func" placeholder="R. Digite a rua" required>
    </div>
	  <div class="form-group col-md-2">
      <label for="bairro_func">Bairro</label>
      <input type="text" class="form-control" name="bairro_func" id="bairro_func" placeholder="Digite o bairro" required>
    </div>
	  <div class="form-group col-md-1">
      <label for="numero_func">Numero</label>
      <input type="number" class="form-control" id="numero_func" name="numero_func" placeholder="00" required>
    </div>
	  <div class="form-group col-md-2">
      <label for="cidade_func">Cidade</label>
      <input type="text" class="form-control" id="cidade_func" name="cidade_func" placeholder="São Paulo" required>
    </div>
	  <div class="form-group col-md-2">
      <label for="estado_func">Estado</label>
      <input type="text" class="form-control" id="estado_func" name="estado_func" placeholder="São Paulo" required>
    </div>
	   <div class="col-auto my-1">
      <div class="custom-control custom-checkbox mr-sm-2 ml-2 mt-n2">
        <input type="checkbox" class="custom-control-input" id="check2">
        <label class="custom-control-label" for="check2" >Lembrar preferências</label>
      </div>
    </div>  
	 <hr class="hrcad2">
	  <br>
	  <button id="btn7cad" type="reset" class="btn but animated pulse" style="background-color:#9dd0e7; color:#E5E5E5; margin-left: 22px;"><i class="fas fa-broom"></i> LIMPAR</button>
	  
	  <button id="btn8cad" type="submit" class="btn  but animated pulse" style="background-color:#9dd0e7;color:#E5E5E5;margin-left: 7px;"><i class="fas fa-save"></i> SALVAR</button>
	  
	  <button  id="btn9cad" type="button" class="btn  but animated pulse" style="background-color:#9dd0e7; color:#E5E5E5;margin-left: 7px;" onClick="ocultadiv2()"><i class="fas fa-times"></i> FECHAR</button> 
	  
	  <button id="btn10cad" type="reset" class= "btn  but animated pulse" style="background-color:#9dd0e7; color:#E5E5E5; margin-left: 10px;"><i class="fas fa-broom" style="font-size: 1.5em;"></i> </button>
	  
	  <button id="btn11cad" type="submit" class="btn but animated pulse" style="background-color:#9dd0e7;color:#E5E5E5;margin-left: 7px;"><i class="fas fa-save"  style="font-size: 1.5em;"></i></button>
	  
	  <button id="btn12cad" type="button" class="btn but animated pulse" style="background-color:#9dd0e7; color:#E5E5E5;margin-left: 7px;" onClick="ocultadiv2()"><i class="fas fa-times"  style="font-size: 1.5em;"></i></button>
		</div>
		</form>
	  </div>
		
<div id="carr"  class="container-fluid animated fadeIn" >	
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators"  >
    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div  class=" carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 imgcarcad" src="Midia-20190412T161604Z-001/Midia/ensaiostecnicos-2018-dombosco-28jan-28.jpg" alt="Primeiro Slide">
		<div class="carousel-caption d-none d-md-block">
          <h5>DOM BOSCO (ESCOLA DE SAMBA)</h5>
          <p style="font-weight: 600">"Ninguém precisa de carnaval quando o coração explode de euforia, amor e alegria !"</p>
        </div>
		
    </div>
    <div class="carousel-item" style="list-style: circle;">
      <img class="d-block w-100 imgcarcad" src="Midia-20190412T161604Z-001/Midia/feitec_4.jpg" alt="Segundo Slide">
		 <div class="carousel-caption d-none d-md-block">
          <h5>BOM PASTOR</h5>
          <p style="font-weight: 600">"O que se faz agora com as crianças, é o que elas farão depois com a sociedade" .</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 imgcarcad" src="Midia-20190412T161604Z-001/Midia/2018_Social_OSDB_AcolhidaEducandos_2semestre_destaque.jpg" alt="Terceiro Slide">
		 <div class="carousel-caption d-none d-md-block">
          <h5>OBRA SOCIAL</h5>
          <p style="font-weight: 600">"A falta de capacidade de reflexão e de diálogo, é a principal causa do nosso sofrimento."</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
</div>	
</main> 
	 
	<!-- Footer -->
<?php
	require("Footer_coord.php");
	?>
<!-- Footer -->
	
</html>