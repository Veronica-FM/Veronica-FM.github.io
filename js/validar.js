// JavaScript Document
function validar(){
	if(cadastro.nome.value==""){
		alert("Campo nome é de preenchimento obrigatório");
	    cadastro.nome.focus;
	    return false;
}
if(cadastro.email.value==""){
		alert("Campo e-mail é de preenchimento obrigatório");
	    cadastro.email.focus;
	    return false;
}
if(cadastro.senha.value==""){
		alert("Campo senha é de preenchimento obrigatório");
	    cadastro.senha.focus;
	    return false;
}

}