<?php

include 'conexao.php';

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$inicio = $_POST['inicio'];
$fim = $_POST['fim'];
$usuario_id = $_POST['usuario_id'];
$status = $_POST['status'];


$sql = "INSERT INTO `tarefas`(`titulo`, `descricao`, `inicio`, `fim`, `usuario_id`, `status`) VALUES ('$titulo', '$descricao', '$inicio', '$fim', $usuario_id, '$status')";
$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 500px; margin-top: 20px">
	<center>
		<h4>Tarefa adicionada com sucesso!</h4>
		<div style="padding-top: 20px">

			<a href="lista_tarefas.php" role="button" class="btn btn-sm btn-primary">Voltar</a>

		</div>
	</center>	
</div>