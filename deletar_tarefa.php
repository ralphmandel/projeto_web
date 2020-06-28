<?php

include 'conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM `tarefas` WHERE `tarefas`.`id` = $id";
$deletar = mysqli_query($conexao,$sql);

header("Location: lista_tarefas.php");

?>