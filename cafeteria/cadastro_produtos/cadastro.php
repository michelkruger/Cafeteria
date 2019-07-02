<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Produtos.</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/cadastro_produto.css">
</head>
<body>
	<?php
	include('../teste_login/teste_login.php');
	include('../header/header.php');
	 ?>
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