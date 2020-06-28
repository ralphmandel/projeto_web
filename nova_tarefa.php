<!DOCTYPE html>
<html>

<head>
	<title>Nova Tarefa</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

	<?php

	include 'conexao.php';
	$id = $_GET['id'];

	?>

	<div class="container" style="margin-top: 40px; width: 500px">
		<div style="text-align: right; margin-top: 10px">
			<a href="lista_tarefas.php" role="button" class="btn btn-sm btn-outline-dark">Voltar</a>
		</div>
		<h4>Nova Tarefa</h4>
		<form action="_inserir_tarefa.php" method="post">
			<label>Título</label>
			<div class="form-group">
				<input type="number" class="form-control" name="usuario_id" value="<?php echo $id ?>" style="display: none">
				<input type="text" name="titulo" class="form-control" placeholder="Digite o título da tarefa" autocomplete="off">
			</div>
			<label>Descrição</label>
			<div class="form-group">
				<textarea class="form-control" name="descricao" placeholder="Descrição..." rows="5" autocomplete="off"></textarea>
			</div>
			<label>Data início</label>
			<div class="form-group">
				<input type="date" name="inicio" class="form-control" autocomplete="off">
			</div>
			<label>Data fim</label>
			<div class="form-group">
				<input type="date" name="fim" class="form-control" autocomplete="off">
			</div>
			<label>Status</label>
			<div class="form-group">
				<input type="text" name="status" class="form-control" placeholder="status" autocomplete="off">
			</div>
			<div style="text-align: right">
				<button type="submit" class="btn btn-success btn-sm">Adicionar</button>
			</div>
		</form>
	</div>

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>