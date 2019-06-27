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
	 ?>
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
		echo "<a style='text-align:center;' href='../index/index.html'>Voltar</a>";
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