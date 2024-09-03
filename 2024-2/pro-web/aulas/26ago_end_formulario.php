<html>
	<title>
	Aula 26.08 - DESTINO FORMULÁRIO
	</title>
	
	<body>
	<?php
	$idade = 0;
	$nome = "";
	
	$nome = $_POST["nome"];
	$idade = $_POST["idade"];
	// $_GET["NOME_VARIAVEL"]: Busca o valor na barra de endereço.
	// $_POST["NOME_VARIAVEL"]: Busca o valor de um formulário com método "POST".
	
	echo "<h1> O seu nome é: ", $nome . "." . "<br> A sua idade é de: " . $idade . ".</h1>"
	?>
	</body>
</html>