<!DOCTYPE html>
<html>
<head>

	<title>Menu Principal</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

	<?php

	session_start();

	$login = $_SESSION['login'];

	if(!isset($_SESSION['login'])){

		header ("Location: login.php");

	}

	?>

	<div class="container" style="margin-top: 100px">
		<div style="text-align: right">
			<a href="login.php" role="button" class="btn btn-primary btn-sm">Logout</a>
		</div>
		<div class="row" style="margin-top: 100px">
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Lista de Tarefas</h5>
							<p class="card-text">Opção para criar e editar suas tarefas.</p>
							<a href="lista_tarefas.php" class="btn btn-primary">Tarefas</a>
						</div>
					</div>
				</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Editar suas informações</h5>
						<p class="card-text">Visualizar, editar seus dados.</p>
						<a href="editar_cadastro.php" class="btn btn-primary">Editar</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>