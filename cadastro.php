<!DOCTYPE html>
<html>
<head>

	<title>Cadastrar</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

	<div class="container" style="width: 400px; margin-top: 40px">
		<div style="text-align: right">
			<a href="login.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
		</div>
		<h4>Cadastro de Usuário</h4>
		<form action="_inserir_usuario.php" method="post">
			<div class="form-group">
				<label>Login</label>
				<input type="text" name="login_e" class="form-control" required autocomplete="off" placeholder="Digite seu Login">
			</div>
			<div class="form-group">
				<label>Senha do Usuário</label>
				<input id="txtSenha" type="password" name="senha_e" class="form-control" required autocomplete="off" placeholder="Senha">
			</div>
			<div class="form-group">
				<label>Repetir Senha</label>
				<input type="password" name="senha_e2" class="form-control" required autocomplete="off" placeholder="Repetir Senha" oninput="validaSenha(this)">
				<small>Precisa ser igual a senha digitada acima.</small>
			</div>
			<div style="text-align: right">
				<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
			</div>
		</form>
	</div>


	<script type="text/javascript" src="js/bootstrap.js"></script>

	<script>
		function validaSenha (input){ 
			if (input.value != document.getElementById('txtSenha').value) {
				input.setCustomValidity('Repita a senha corretamente');
			} else {
				input.setCustomValidity('');
			}
		} 
	</script>
	
</body>

</html>