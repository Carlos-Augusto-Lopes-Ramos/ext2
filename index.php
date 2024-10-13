<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Principal</title>
	<link rel="stylesheet" type="text/css" href="./style/main.css" />
	<script href="https://releases.jquery.com/git/jquery-git.js"></script>
	<script href="main.js"></script>
</head>

<body>
	<img src="./images/umPonto.png" width="70px" height="60px" class="spamado">
	<div id="container">
		<?php
		
			include_once("./menu.php");

		?>
		<div id="content">
			<div id="imgContext">
				<img src="./images/fotinha.png" width="200px" height="200px" style="border: 2px solid black">
			</div>
			<div id="alunoContext">
				<div id="alunoPivot">
				<h1>Carlos Augusto Lopes Ramos</h1>
				<h2>24202942</h2>
				<p>Uma livraria deseja criar um sistema de gestão de estoque e vendas. A livraria vende livros que
						possuem
						um título, um ISBN único e são escritos por um ou mais autores. Cada autor tem um nome e um
						identificador único.
						A livraria possui diversas filiais, e cada filial tem um endereço e um identificador único. Cada
						filial pode
						ter várias cópias de um livro em estoque, e o estoque pode variar entre as filiais.
						Clientes frequentam a livraria e realizam compras. Cada cliente tem um CPF único, nome e
						endereço de
						e-mail. Cada compra é realizada em uma única filial e pode incluir múltiplos livros. A data da
						compra
						também é registrada.</p>
					</div>
			</div>
		</div>
	</div>
</body>

</html>
