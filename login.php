<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<title>Tela de Login</title>
	<link rel="stylesheet" href="css/bootstrap.css">

	<style type="text/css">
		#tamanho{
			width: 350px;
			-webkit-box-shadow: 10px 10px 26px -2px rgba(61,61,61,0.77);
			-moz-box-shadow: 10px 10px 26px -2px rgba(61,61,61,0.77);
			box-shadow: 10px 10px 26px -2px rgba(61,61,61,0.77);
		}

	</style>
</head>

<body>

	<div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3">
		<div style="padding: 15px">
			<center>
				<img src="imagem/cadeado.png" width="125px" height="125px">
			</center>
			<form action="autenticar.php" method="post">
				<div class="form-group">
					<label>Usuário</label>
					<input type="text" name="login_e" class="form-control" placeholder="Usuário" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Senha</label>
					<input type="password" name="senha_e" class="form-control" placeholder="Senha" autocomplete="off" required>
				</div>
				<div style="text-align: right">
					<button type="submit" class="btn btn-sm btn-success">Entrar</button>
				</div>
			</form>
		</div>
	</div>

	<div style="margin-top: 10px">
		<center>
			<small>Você não possui cadastro? Clique <a href="cadastro.php">aqui</a></small>
		</center>
	</div>
	

	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>