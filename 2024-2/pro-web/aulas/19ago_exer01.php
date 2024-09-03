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
		$valor02 = 2;
		
		$resultado = $valor01 + $valor02;
		echo "O resultado da adição dos valores: " . $valor01 . "e" . $valor02 . "é de: " . $resultado;
		
		$resultado = $valor01 - $valor02;
		echo "O resultado da subtração dos valores: " . $valor01 . "e" . $valor02 . "é de: " . $resultado;
		
		$resultado = $valor01 * $valor02;
		echo "O resultado da multiplicação dos valores: " . $valor01 . "e" . $valor02 . "é de: " . $resultado;
		
		$resultado = $valor01 / $valor02;
		echo "O resultado da divisão dos valores: " . $valor01 . "e" . $valor02 . "é de: " . $resultado;
		
		$resultado = $valor01 % $valor02;
		echo "O resto das divisões dos valores: " . $valor01 . "e" . $valor02 . "é de: " . $resultado;
		
		$resultado = $valor01 ** $valor02;
		echo "O resultado da exponenciação dos valores: " . $valor01 . "e" . $valor02 . "é de: " . $resultado;

	?>
	</body>
</html<