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
		echo "<h2>O resultado da adição é: <i> $resultado </i> </h2>";

		$resultado = $valor01 - $valor02;
		echo "<h2>O resultado da subtração é: <i> $resultado </i> </h2>";
		//Se necessário pular linha, usa-se a tag <br> dentro das aspas.
		
		$resultado = $valor01 * $valor02;
		echo "O resultado da multiplicação é: <i> $resultado </i> </h2>";
		
		$resultado = $valor01 / $valor02;
		echo "<h2>O resultado da divisão é: <i> $resultado </i> </h2>";
		
		$resultado = $valor01 % $valor02;
		echo "<h2>O resto da divisão entre os valores é de:<i> $resultado </i> </h2>";
		
		$resultado = $valor01 ** $valor02;
		echo "<h2>A exponenciação entre os valores é: <i> $resultado </i> </h2>";
	
		echo "Resultado direto no echo:" . $valor01 ** $valor02;
		/* Os cálculos realizados dentro da função "echo", devem ser realizados FORA das aspas (simples ou duplas). 
		Para que a exibição aconteça corretamente, use o "." para concatenar a parte interna das aspas e o cálculo realizada na parte externa.
		*/
		
	?>
	</body>
</html<