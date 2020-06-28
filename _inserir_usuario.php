<?php

include 'conexao.php';
include 'script/password.php';

$login_e = $_POST['login_e'];
$senha_e = $_POST['senha_e'];

$sql = "INSERT INTO usuarios (login,senha) values ('$login_e', sha1('$senha_e'))";

$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 400px">
	<center>
		<h3>Usuário Adicionado com Sucesso!!</h3>
		<div>
			<a href="login.php" class="btn btn-sm btn-warning" style="color: #006C5D;background-color: #D7CC73">Voltar</a>
		</div>
	</center>

</div>