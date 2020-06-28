<!DOCTYPE html>

<html>

<head>
	<title>Listagem de Tarefas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="https://kit.fontawesome.com/5f77a0404e.js" crossorigin="anonymous"></script>
</head>

<body>

	<?php

	session_start();

	$login_e = $_SESSION['login'];

	if(!isset($_SESSION['login'])){

		header ("Location: login.php");

	}

	?>

	<div class="container" style="margin-top: 40px">
		<div style="text-align: right;">
			<a href="menu.php" role="button" class="btn btn-sm btn-outline-dark">Voltar</a>
		</div>
		<h3>Lista de Tarefas</h3>
		<br>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Título</th>
					<th scope="col">Descrição</th>
					<th scope="col">Data Início</th>
					<th scope="col">Data Fim</th>
					<th scope="col">Status</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>

			<?php
			include 'conexao.php';
			$sql = "SELECT id FROM usuarios WHERE login = '$login_e'";
			$busca = mysqli_query($conexao,$sql);
			$array = mysqli_fetch_array($busca);
			$user_id = $array['id'];

			$sql2 = "SELECT id, titulo, descricao, inicio, fim, status FROM tarefas WHERE usuario_id = '$user_id'";

			$busca2 = mysqli_query($conexao,$sql2);

			while ($array2 = mysqli_fetch_array($busca2)) {

				$id = $array2['id'];
				$titulo = $array2['titulo'];
				$descricao = $array2['descricao'];
				$inicio = $array2['inicio'];
				$fim = $array2['fim'];
				$status = $array2['status'];
				?>
				<tr>
					<td><?php echo $titulo ?></td>
					<td><?php echo $descricao ?></td>
					<td><?php echo $inicio ?></td>
					<td><?php echo $fim ?></td>
					<td><?php echo $status ?></td>

					<td>
						<a class="btn btn-outline-dark btn-sm" href="editar_tarefa.php?id=<?php echo $id ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
						<a class="btn btn-danger btn-sm" href="deletar_tarefa.php?id=<?php echo $id ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
					</td>
				</tr>
			<?php } ?>

		</table>
		<div style="text-align: right;">
			<a href="nova_tarefa.php?id=<?php echo $user_id ?>" role="button" class="btn btn-sm btn-success">Novo</a>
		</div>
	</div>

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>