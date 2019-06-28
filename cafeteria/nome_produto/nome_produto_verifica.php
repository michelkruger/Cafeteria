<?php
	require_once("../php/conect_bd.php");
	$con=conect();
	$nome=$_POST['nome_produto'];
	if(empty($nome)){
		echo "<p style='color:red; text-align:center;'>Preencha com o nome do produto obrigatóriamente!</p><br>";
		echo "<a style='text-align:center;' href='nome_produto.php'>Voltar</a>";
	}else{
		$registro="INSERT INTO tbnomeproduto (nomeProduto) VALUES ('$nome')";
		$result=mysqli_query($con,$registro);
		if(!$result){
		echo "erro no script vacilão";
		echo "<a href='nome_produto.php'>Voltar</a>";
		}else{
			header("Location: nome_produto.php");	
		}
	}
?>