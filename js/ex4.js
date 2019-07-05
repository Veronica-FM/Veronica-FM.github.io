// JavaScript Document
function valida(){
	if(isNaN(cadastro.cpf.value)){
		alert("Digite somente números para o campo CPF.");
		cadastro.cpf.focus();
		return false;
	}
	if(cadastro.cpf.value.length!=11){
		alert("CPF inválido!");
		cadastro.cpf.focus();
		return false;
	}
	if(cadastro.confirma.value!=cadastro.senha.value){
		alert("As senhas devem ser iguais.");
		cadastro.confirma.focus();
		return false;
	}
	if(cadastro.senha.value.length<6 || cadastro.senha.value.length>10){
		alert("A senha deve ter no mínimo 6 e no máximo 10 caracteres.");
		cadastro.senha.focus();
		return false;
	}
}