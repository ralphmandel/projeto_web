<?php

include 'conexao.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$inicio = $_POST['inicio'];
$fim = $_POST['fim'];
$usuario_id = $_POST['usuario_id'];
$status = $_POST['status'];

$sql = "UPDATE `tarefas` SET `titulo`='$titulo',`descricao`= '$descricao', `inicio`='$inicio', `fim`='$fim', `usuario_id`= $usuario_id, `status`='$status' WHERE id = $id";

$atualizar = mysqli_query($conexao,$sql);
header("Location: lista_tarefas.php");

?>