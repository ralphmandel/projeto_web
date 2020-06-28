<?php

include 'conexao.php';
include 'script/password.php';

$id = $_POST['id'];
$login = $_POST['login_novo'];
$senha = $_POST['senha_nova'];


$sql = "UPDATE `usuarios` SET `login`='$login',`senha`= sha1('$senha') WHERE id = $id";

$atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 400px">
	<center>
		<h3>Atualizado com Sucesso!!</h3>
		<div>
			<a href="menu.php" class="btn btn-sm btn-warning" style="color: #006C5D;background-color: #D7CC73">Voltar</a>
		</div>
	</center>

</div>