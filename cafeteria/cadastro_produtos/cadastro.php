<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Produtos.</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/cadastro_produto.css">
</head>
<body>
	<header id="header">
		<div class="main">
			<h1><a href="../index/index.html">Coffee<span>Time</span></a></h1>
			<ul>
				<li><a href="../search/search.html">Pesquisa</a></li></li>
				<li><a href="cadastro.php">Cadastro</a></li>
				<li><a href="../nome_produto/nome_produto.php">Nome produto</a></li>
				<li><a href="../login/login.php">Login</a></li>
			</ul>
		</div>
	</header>
	<form id="form" method="POST" action="../php/cadastro.php">
		<div class="cadastro">
			<div class="arrumar">
			<h4>Cadastro</h4>
			<label class="label">Nome do produto:</label>
			<select name="nome" class="select">
<?php
	require_once("../php/conect_bd.php");
	$con=conect();
	$consult="SELECT * FROM tbnomeproduto";
	$result=mysqli_query($con,$consult);
	foreach ($result as $show) {
		echo"<option value=" . $show['codigoNomeProduto'] . "> " . $show['nomeProduto'] . " </option>";
	}
?>
		</select>
			<label class="label">Valor do produto:</label>
				<input type="number" name="valor"  placeholder="valor do produto: " class="input">
			<label class="label">Descrição do produto:</label> 
				<textarea name="descricao"  placeholder="escreva a Descrição do produto: " rows="4" cols="50" class="textarea"></textarea>
			<input type="submit" name="enviar" value="enviar" class="input_enviar">
			</div>
		</div>		
	</form>
	</body>
</html>