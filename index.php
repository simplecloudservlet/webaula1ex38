<!-- TODO1: PHP: Crie uma funcao que compare os elementos de dois vetores -->
<!-- TODO2: PHP: Crie uma funcao que ordene os elementos de um vetor -->

<!DOCTYPE html>
<html lang="bzs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Comércio Eletrônico</title>

	<link rel="shortcut icon" href="favicon/favicon.ico" /> <!-- favicon.ico-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />

	<!-- A ordem aqui eh importante: primeiro deve vir o 'jquery.js', depois scripts.js, porque este último utiliza 'jquery.js'-->
	<script src="js/jquery-3.7.1.js"></script>
	<script src="js/decimal.js"></script>
	<script src="js/scripts.js"></script>

</head>

<body>

	<!-- TODO1 -->
	<?php 
		//Vetores em PHP sao dicionarios (chave => valor)
		$vetor1 = [ 0 => "Lápis", 1 => "Caderno", 2 => "Borracha"];
		$vetor2 = [ 0 => "Borracha", 1 => "Caderno", 2 => "Lápis"];

		function f1(){
			global $vetor1;  //
			global $vetor2;  //

			foreach($vetor1 as $i){
				foreach($vetor2 as $j){
					echo $i == $j ? $i . " Sim, Posicao no vetor2 [" . array_search($i,$vetor2) . '] <br>': " Não <br>";
					
				}
			}
		}

		f1(); //Invoca a funcao
	?>
<br>
<br>

<!-- TODO2 -->
<?php 
		//Vetores em PHP sao dicionarios (chave => valor)
		// sort: ordenacao crescente, reinicia as chaves
		// asort: ordenacao crescente, nao reinicia as chaves
		// ksort: ordenacao crescente pela chave.
		$vetor1 = [ 2 => "Lápis", 1 => "Caderno", 3 => "Borracha"];
		$vetor2 = [ 2 => "Lápis", 1 => "Caderno", 3 => "Borracha"];
		 

		function f2(){
			global $vetor1;  //
			global $vetor2;  //
		
			//Ordenacao pelo valor
			echo 'Ordenacao pelo valor: <br>';
			sort($vetor1);  //Reinicia as chaves
			foreach($vetor1 as $key => $val){
				echo 'Chave: ' . $key . ' Valor: ' . $val . '<br>';
			}

			echo '<br><br>';

			//Ordenacao pelo valor
			echo 'Ordenacao pelo valor: <br>';
			asort($vetor2);  //Nao reinicia as chaves
			foreach($vetor2 as $key => $val){
				echo 'Chave: ' . $key . ' Valor: ' . $val . '<br>';
			}

			echo '<br><br>';

			//Ordenacao pela chave
			echo 'Ordenacao pela chave: <br>';
			ksort($vetor2); 
			foreach($vetor2 as $key => $val){
				echo 'Chave: ' . $key . ' Valor: ' . $val . '<br>';
			}

			echo '<br><br>';
			
		}

		f2(); //Invoca a funcao
	?>
<br>
<br>


<form action='calcular.php' method="get">
		Número1: <input name="n1" type="text" required autofocus />
		<br>
		Número2: <input name="n2" type="text" required />
		<br>
		<input type="submit">
</form>
	
</body>

</html>