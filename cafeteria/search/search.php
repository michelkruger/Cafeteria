<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Produtos.</title>
	<link rel="stylesheet" type="text/css" href="../css/search.css">
	<meta charset="utf-8">
</head>
<body>
	<?php 
	include('../header/header.php');
	 ?>
	<form id="form" action="../php/select.php" method="POST">
		<div class="cadastro">
			<div class="arrumar">
			<h4>Pesquisa</h4>
				<!-- Input Nome -->
				<label class="label">Nome do produto:</label>
				<input type="text" name="nomeProduto" placeholder="nome do produto: " class="input">

				<!-- Input valor -->
				<label class="label">Valor do produto:</label>
				<input type="number" name="valorProduto"  placeholder="valor do produto: " class="input">

				<!-- Input Id -->
				<label class="label">Id do produto:</label>
				<input type="number" name="idProduto"  placeholder="id do produto: " class="input">

				<!-- select para mostar em qual ordem deve aparecer os produtos. -->
				<select class="select" name="select">
				<option value="nomeProduto">Ordem por nome.</option>
				<option value="valorProduto">Ordem por valor.</option>
				<option value="codigoProduto">Ordem por Id.</option>
				</select>

				<input type="submit" name="enviar" value="Buscar" class="input input_enviar">

			</div>
		</div>		
	</form>
</body>
</html>