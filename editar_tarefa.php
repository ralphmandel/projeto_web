<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Editar Tarefa</title>
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
$id = $_GET['id'];
$sql = "SELECT titulo, descricao, inicio, fim, usuario_id, status FROM tarefas WHERE id = $id";
$busca = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($busca);

$titulo = $array['titulo'];
$descricao = $array['descricao'];
$inicio = $array['inicio'];
$fim = $array['fim'];
$usuario_id = $array['usuario_id'];
$status = $array['status'];
?>



<div class="container" style="margin-top: 40px; width: 500px">
	<div style="text-align: right; margin-top: 10px">
		<a href="lista_tarefas.php" role="button" class="btn btn-sm btn-outline-dark">Cancelar</a>
	</div>
	<h4>Nova Tarefa</h4>
	<form action="_atualizar_tarefa.php" method="post">
		<label>Título</label>
		<div class="form-group">
			<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
			<input type="number" class="form-control" name="usuario_id" value="<?php echo $usuario_id ?>" style="display: none">
			<input type="text" name="titulo" class="form-control" value="<?php echo $titulo ?>" autocomplete="off">
		</div>
		<label>Descrição</label>
		<div class="form-group">
			<textarea class="form-control" name="descricao" rows="5" autocomplete="off"><?php echo $descricao ?></textarea>
		</div>
		<label>Data início</label>
		<div class="form-group">
			<input type="date" name="inicio" class="form-control" value="<?php echo $inicio ?>" autocomplete="off">
		</div>
		<label>Data fim</label>
		<div class="form-group">
			<input type="date" name="fim" class="form-control" value="<?php echo $fim ?>"autocomplete="off">
		</div>
		<label>Status</label>
		<div class="form-group">
			<input type="text" name="status" class="form-control" value="<?php echo $status ?>" autocomplete="off">
		</div>
		<div style="text-align: right">
			<button type="submit" class="btn btn-success btn-sm">Atualizar</button>
		</div>
	</form>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>