<html>
	<title>
	Aula 26.08 - FORMULÁRIO
	</title>
	<body>
		<h1> Formulário de Apresentação </h1>
		<form action="aula_26_08_end_formulario.php" method="POST">
		<!-- A função "action" remete para o arquivo onde as informações do formulário serão enviadas. 
		Já o method "GET" mostra as informações na URL da página (pode causar problemas de segurança), enquanto a função "POST" esconde as informações.
		-->
			<fieldset>
			NOME:
			<label>
			
			<!-- O label "for" vincula exatamente o seletor ao nome. Exemplo:
			Na opção seletora com um círculo e o nome "Kayke", se você clicar apenas no nome "Kayke" ele não marcará.
			O label "for" previne isso.
			-->
			
			</label>
			<input type="text" maxlength="50" placeholder="Digite seu nome" name="nome">
			
			<br>
			
			IDADE:
			<label for="idade">
			
			<!-- O label "for" vincula exatamente o seletor ao nome. Exemplo:
			Na opção seletora com um círculo e o nome "Kayke", se você clicar apenas no nome "Kayke" ele não marcará.
			O label "for" previne isso.
			-->
			
			</label>
			<input type="number" min="0" max="130" placeholder="" name="idade">
			<input type="submit" value="Enviar!">
			</fieldset>
		</form>
	</body>
<html>