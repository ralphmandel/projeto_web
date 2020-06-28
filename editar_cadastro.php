<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Atualizar Cadastro</title>
	<link rel="stylesheet" href="css/bootstrap.css">

	<style type="text/css">
		
		#tamanhoContainer {
			width: 500px;
		}

		#botao {
			background-color: #D7CC73;
			color: #006C5D;
			font-weight: bold;
		}

	</style>

</head>

<body>

	<?php

	session_start();

	$login_e = $_SESSION['login'];

	if(!isset($_SESSION['login'])){

		header ("Location: login.php");

	}

	include 'conexao.php';
	$sql = "SELECT id, login, senha FROM usuarios WHERE login = '$login_e'";
	$buscar = mysqli_query($conexao,$sql);
	$array = mysqli_fetch_array($buscar);
	$login_antigo = $array['login'];
	$id = $array['id'];
	?>



	<div class="container" id="tamanhoContainer" style="margin-top: 40px">
		<div style="text-align: right">
			<a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
		</div>
		<h4>Atualizar dados</h4>
		<form action="_atualizar_cadastro.php" method="post" style="margin-top: 20px">
			<div class="form-group">
				<label>Login</label>
				<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
				<input type="text" class="form-control" name="login_novo" value="<?php echo $login_antigo ?>">
			</div>		
			<div class="form-group">
				<label>Nova senha</label>
				<input id="txtSenha" type="password" name="senha_nova" class="form-control" required autocomplete="off" placeholder="Senha">
			</div>
			<div class="form-group">
				<label>Repetir Senha</label>
				<input type="password" name="senha_nova2" class="form-control" required autocomplete="off" placeholder="Repetir Senha" oninput="validaSenha(this)">
				<small>Precisa ser igual a senha digitada acima.</small>
			</div>
			<div style="text-align: right;">
				<button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
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