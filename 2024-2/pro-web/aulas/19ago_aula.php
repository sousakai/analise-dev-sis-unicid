<html>
	<head>
		<title> Aula 19.08.2024 - 
		<?php
			echo "Hello, World"
		?>
		</title>
	</head>
	<body>
		<?php
		
			echo "<a href='https://unicid.edu.br' target ='_blank'>Site da Unicid</a>";
	//Tags com html que possuem duas aspas NÃO podem ser usadas, pois ele identificará as aspas como fechamento do comando.
	//Substitua por aspas simples ou duplas (sempre o contrário das aspas que abrem o comando PHP).
	
	//Variáveis sempre se iniciam com "$"
	
	//Declare a variável no início do código, e atribua valor posteriormente.
	
	
	$nome = " "; //Variável string, pois se inicia com aspas.
	$nome = "Kayke de Sousa";
	
		echo "<h1> $nome </h1>"; 
		//Forma 1 de exibição de variáveis. As aspas duplas exibem o conteúdo da variável.
		
		echo '<h1> $nome </h1>';
		//Forma 1. de exibição de variáveis. As aspsa simples fazem o código interpretar como string.
		
		echo '<h1>' . $nome . '</h1>';
		//Forma 2 de exibição de variáveis. Serve para " ou '. O ponto é usado para concatenar variáveis.
	
		?>
	</body>
</html>