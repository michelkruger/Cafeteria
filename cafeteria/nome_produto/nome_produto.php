<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Produtos.</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/nome_produto.css">
</head>
<body>
	<header id="header">
		<div class="main">
			<h1><a href="../index/index.html">Coffee<span>Time</span></a></h1>
			<ul>
				<li><a href="../search/search.html">Pesquisa</a></li></li>
				<li><a href="../cadastro_produtos/cadastro.php">Cadastro</a></li>
				<li><a href="nome_produto.php">Nome produtos </a></li>
			</ul>
		</div>
	</header>
	<form id="form" method="POST" action="nome_produto.php">
		<div class="cadastro">

			<div class="arrumar">

			<h4>Nome do Produto:</h4>
			<label class="label">Nome do produto:</label>
				<input type="text" name="nome_produto"  placeholder="Nome do Produto: " class="input">
			<input type="submit" name="enviar" value="enviar" class="input_enviar">
<?php
	require_once("../php/conect_bd.php");
	$con=conect();
	$nome=$_POST['nome_produto'];
	if(empty($nome)){
		echo "<p style='color:white; text-align:center;'>Preencha com o nome do produto obrigatóriamente!</p><br>";
		echo "<a style='text-align:center;' 'href='../index/index.html'>Voltar</a>";
	}else{
		$registro="INSERT INTO tbnomeproduto (nomeProduto) VALUES ('$nome')";
		$result=mysqli_query($con,$registro);
		if(!$result){
		echo "erro no script vacilão";
		}
	}
?>
</div>
		</div>		
	</form>
	</body>
</html>