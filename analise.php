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

	</header>

	<br>

	<section>
		<br><br><br><br><br><br><br><br>
		
		<h1>Programação PHP</h1>
		<h2>Resultados:</h2>

		<br>
			
			<?php
				
			$pesquisa = $_POST['pesquisar'];

			switch ($pesquisa) {
				case 'hatch':

					echo"<h2>O que é tipo de veículo hatch?</h2>
					<p>Carros do tipo hatch são divididos em dois volumes principais: a caixa do motor e o bloco dos passageiros, que fica junto com o porta-malas.</p>
					<p>Na prática, isso significa apenas que o automóvel é mais compacto.</p>

					<p>Uma das primeiras vantagens do hatch é o seu tamanho compacto, que pode facilitar muito na hora de conseguir uma vaga. Além disso, o carro hatch oferece melhor percepção das dimensões do próprio veículo.</p>";

					break;

				case 'suv':

					echo "<h2>SUV</h2>
					<p>Em sua definição básica, SUV é a sigla para Sport Utility Vehicle, ou Veículo Utilitário Esportivo, ou seja, um carro destinado a carga/trabalho, como as picapes, mas com uma tocada mais esportiva. Normalmente é equipado com tração nas quatro rodas e caracteristicamente de porte avantajado.</p>

					<p>Qual a diferença de um carro SUV?</p>
					<p>Os SUVs são veículos que têm mais adaptabilidade a diferentes terrenos, são mais altos e robustos e, também, confortáveis e arrojados. <p>O motor, no geral, é mais potente e alguns modelos têm, ainda, a opção de tração 4×4.</p>";

					break;

				case 'sedan': 

					echo "<h2>Carro para toda família</h2><br>

					<p>Com seu espaço interno e um generoso porta-malas, sedans são a opção ideal para famílias que usam o carro para suas tarefas diárias ou para viagens de longa duração. Um sedan comporta confortavelmente as crianças e até mesmo animais de estimação, se necessário.</p>

					<p>As principal vantagem em adquirir um carro sedan é o conforto, oferecido por um espaço interno maior, e a capacidade do porta-malas — ideal para quem possui filhos e precisa de mais espaço para as bagagens.</p>";

					break;
				
				case 'carro para a familia':

					echo "<h2>Carro para toda família</h2>
					<p>Com seu espaço interno e um generoso porta-malas, sedans são a opção ideal para famílias que usam o carro para suas tarefas diárias ou para viagens de longa duração. Um sedan comporta confortavelmente as crianças e até mesmo animais de estimação, se necessário.</p>

					<p>As principal vantagem em adquirir um carro sedan é o conforto, oferecido por um espaço interno maior, e a capacidade do porta-malas — ideal para quem possui filhos e precisa de mais espaço para as bagagens.</p>";

					break;

				default:
					echo "Resultado não encontrado, volte para a página anterior e pesquise novamente";
					break;
			}

			?><br><br>

			<a href="index.php"> <<<<< Voltar para a pagina inicial. </a>


	</section>

	<br>

	<footer>
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