<html>
	<head>
		<title> Aula 19.08.2024 - 
		<?php
			echo "Hello, World";
		?>
		</title>
	</head>
	<body>
	<?php
		$resultado = 0;
		$valor01 = 3;
		
		$valor01 = $_GET['v101'];
		/*GET: Técnica de leitura de variáveis da barra de endereço. Dará erro, pois a barra de endereço está vazia.
		Para declarar na barra, usamos ? e =. Exemplo para esse caso:
		http://localhost/Kayke/exer_get.php?v101=10
		*/
		
		$valor02 = 2;
		
		$resultado = $valor01 + $valor02;
		echo "O resultado da adição dos valores: " . $valor01 . "e" . $valor02 . "é de: " . $resultado;
	
	?>
	</body>
</html<