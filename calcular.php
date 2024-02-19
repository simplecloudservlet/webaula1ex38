<!DOCTYPE html>
<html lang="bzs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon/favicon.ico" />
</head>

<?php
	//Se a pagina possui apenas codigo PHP, a linha abaixo eh necessaria:
	//header('Content-Type: text/html; charset=utf8');

	if(isset($_GET['n1']) && isset($_GET['n2'])){

		$n1 = $_GET['n1'];
		$n2 = $_GET['n2'];

		echo 'Soma:' . ($n1+$n2) . '<br><br>';
		echo 'Texto ' . ' concatenado ' . ' com ' . ' ponto.';
	} else {
		echo 'Not found numbers.';
	}
?>
<br>
<br>

<form action="index.php">
	<button type="submit">Retornar</button>
</form>

