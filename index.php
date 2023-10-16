<!DOCTYPE html>
<html lang = pt-br> 
<head>
	<meta charset="utf-8">
	<meta name = "viewport" content = "width-device-width, initial-scale-1">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">

	
	<title>Programador Web</title>
</head>
<body>
	<header>

		<h3>Programação Web</h3>
		<h4>IGRIS LTDA</h4>
		<br>

	</header>

	<br>

	<section>
		<br><br><br><br><br><br><br><br>

		<h1>Programação PHP</h1>
		<h2>Busca com switch</h2>

			<div class = "formulario">
				<form action = "analise.php" method = "post" target = "">

					<label for = "pesquisa" >Pesquisar</label>
					<input type="text" id = "pesquisa" name = "pesquisar" placeholder = "Oque você deseja hoje?">
					<input type = "submit" id = "enviar" name = "enviar" value = "OK">
					
				</form>
			</div>

			<br><br>

			<section class = "container" id = "grid-container">

				<div class = "grid">

					<div>

						<h2>Hatch</h2>

							<img src = "img/hatch.png"><br>
							<a href = "hatch.html">Alugue Agora</a>

					</div>

					<div>

						<h2>Sedan</h2>
							<img src="img/sedan.png"><br>
							<a href = "sedan.html">Alugue Agora</a>

					</div>

					<div>

						<h2>SUV</h2>

							<img src = "img/suv.png"><br>
							<a href = "suv.html">Alugue Agora</a>

					</div>

					<div>Conteudo 4</div>
					<div>Conteudo 5</div>
					<div>Conteudo 6</div>

				</div>
				

		</section>

		<br><br><br><br>
		<section>

			<!----------------->

			<fieldset>

				<legend><h2>Faça seu orçamento de aluguel</h2></legend>

				<form action="aluguel.php" method = "post" target = "_blank">


			<label for = "data">Data do Orçamento</label><br>
			<input type="data" name="data" name = "data"><br><br>

			<label for = "tempo">Tempo de Aluguel</label><br>
			<input type = "number" id = "tempo" name = "tempo" min = "1" max = "6" placeholder = "1"><br><br>

			<label>Escolha o veiculo</label><br>

			<select>
				<option>Hatch</option>
				<option>Sedan</option>
				<option>SUV</option>
			</select>

			<br><br>

			<label form = "nomeCliente">Insira seu nome completo</label><br>
			<input type="text" id = "nomeCliente" name = "nome" placeholder = "Insira seu nome completo"><br><br>

			<label for = "obs">Observação adicionais</label><br>
			<input type="text" id = "obs" name = "obs" placeholder="Alguma Pergunta?">
			<input type="submit" value="Enviar">

			</fieldset>

		</section>

	</section>

	<br>

	<footer>
		<br>

		<h3>IGRIS LTDA TREINAMENTOS E INFORMÁTICA</h3>
		<h4>Programação Web com HTML, CSS e PHP</h4>
		<br>
		<p class="texto-rodapé">Contatos:</p>
		<p class="texto-rodapé">E-Mail:</p>
		<p class="texto-rodapé">WhattsApp: (47) 99992-6974</p>
		<p class="texto-rodapé">Desenvolvido por: Trilha TDS</p>

	</footer>


</body>


</html>