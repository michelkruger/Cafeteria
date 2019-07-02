<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Produtos.</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/nome_produto.css">
</head>
<body>
	<?php 
	include('../header/header.php');
	include('../teste_login/teste_login.php');
	 ?>
	<form id="form" method="POST" action="nome_produto_verifica.php">
		<div class="cadastro">

			<div class="arrumar">

			<h4>Nome do Produto:</h4>
			<label class="label">Nome do produto:</label>
				<input type="text" name="nome_produto"  placeholder="Nome do Produto: " class="input">
			<input type="submit" name="enviar" value="enviar" class="input_enviar">
</div>
		</div>		
	</form>
	</body>
</html>