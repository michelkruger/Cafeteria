<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Produtos.</title>
	<link rel="stylesheet" type="text/css" href="../css/resultado.css">
	<meta charset="utf-8">
</head>
<body>
	<header id="header">
		<div class="main">
			<h1><a href="../index/index.html">Coffee<span>Time</span></a></h1>
			<ul>
				<li><a href="">Produtos</a></li>
				<li><a href="../search/search.html">Pesquisa</a></li></li>
				<li><a href="../cadastro_produtos/cadastro.html">Cadastro</a></li>
				<li><a href="nome_produto.php">Nome produtos </a></li>
				<li><a href="../login/login.php">Login</a></li>
			</ul>
		</div>
	</header>
	<section id="forma">

<?php
	require_once("conect_bd.php");
	function cadastro(){
		$con_bd = conect();
		$idnome=$_POST['nome'];
		$valor=$_POST['valor'];
		$descricao=$_POST['descricao'];
		if(empty($idnome) || empty($valor) || empty($descricao)){
			echo "<p>Preencha todos os campos obrigatóriamente!</p>";
			echo "<form action='../cadastro_produtos/cadastro.html'><input type='submit' value='Retornar'></input></form>";
		}else{
			$insert_bd= "INSERT INTO tbproduto (codNomeProduto,descricaoProduto,valorProduto) VALUES ('$idnome','$descricao','$valor')";
			$sql= mysqli_query($con_bd, $insert_bd);
			header('Location: ../cadastro_produtos/cadastro.php');
		}
		mysqli_close($con_bd);
	}
	cadastro();
?>
</div>
	</section>
</body>
</html>