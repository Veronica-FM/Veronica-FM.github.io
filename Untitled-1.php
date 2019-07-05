<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>SYSDB</title>
</head>
<body>
	<form name="novo_usuario" id="novo_usuario" method="post" action="cadastrar_usuario.php" >
	<label for="nome">Nome</label><br>
		<input type="text" name="nome" id="nome" placeholder="Nome Completo" required><br>
		<label for="perfil">Perfil</label>
		<select name="perfil" id="perfil">
		<option value="" selected disable required>Selecione um perfil</option>
			<option value="coordenador">Coordenador</option>
			<option value="secretaria">Secretaria</option>
			<option value="educador">Educador</option>
		</select><br>
		<label for="login">Login</label><br>
		<input type="text" name="login" id="login" placeholder="Nome de usuário" required><br>
		<label for="senha">Senha</label><br>
		<input type="password" name="senha" id="senha" placeholder="Digite no máximo 10 caracteres" required><br>
		<label for="confirma">Confirme a senha</label><br>
		<input type="password" name="confirma" id="confirma" placeholder="confirme a senha" required><br>
		<input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar"> <input type="reset" name="limpar" id="limpar" value="Limpar formulário">
	</form>
</body>
</html>