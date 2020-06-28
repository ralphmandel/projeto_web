<?php

include 'conexao.php';
include 'script/password.php';

$login_e = $_POST['login_e'];
$senha_e = $_POST['senha_e'];

$sql = "SELECT login, senha FROM usuarios WHERE login = '$login_e'";
$buscar = mysqli_query($conexao,$sql);

$total = mysqli_num_rows($buscar);

do {

	$senha = $array['senha'];

	$senhadecodificada = sha1($senha_e);

if ($total > 0) {

	if($senhadecodificada == $senha) {
		session_start();
		$_SESSION['login'] = $login_e;
		header('Location: menu.php');
	} else {
		header('Location: erro.php');
	}


} else {
	header('Location: erro.php');
}

} while ($array = mysqli_fetch_array($buscar))


?>