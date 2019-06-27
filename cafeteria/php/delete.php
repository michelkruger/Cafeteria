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
				<li><a href="../cadastro_pessoa/cadastro_pessoa0_1.php">Usuário</a></li>
				<li><a href="../search/search.html">Pesquisa</a></li></li>
				<li><a href="../cadastro_produtos/cadastro.html">Cadastro</a></li>
				<li><a href="nome_produto.php">Nome produtos </a></li>
				<li><a href="../login/login.php">Login</a></li>
			</ul>
		</div>
	</header>
	<section id="forma">
		<div class="tablediv">
			<table border="1">
		<tr>
			<th>Codigo do Produto:</th>
			<th>Nome do Produto:</th>
			<th>Descrição do Produto:</th>
			<th>Valor do Produto:</th>
		</tr>
		
<?php
	function confirm(){
		require_once("conect_bd.php");
		$con= conect();
		if(isset($_GET['delete'])){
			$deletar=$_GET['delete'];
			$sql_consult="SELECT * FROM tbproduto INNER JOIN tbnomeproduto ON codNomeProduto=codigoNomeProduto WHERE codigoProduto='$deletar'";
			$result_consult=mysqli_query($con,$sql_consult);
			foreach ($result_consult as $exibe) {
				# code...
				echo  "<tr><td>" . $exibe['codigoProduto'] . "</td>";
				echo "<td>" . $exibe['nomeProduto'] . "</td>";
				echo "<td>" . $exibe['descricaoProduto'] . "</td>";
				echo "<td>" . $exibe['valorProduto'] . "</td></tr>";
			}
			echo "</table><p>Tem certeza que deseja excluir este registro?</p>
					<form action='delete_confirmed.php' method='POST'>
					<input type='hidden' name='codigoProduto' value='". $deletar ."'></input>
					<input type='submit' value='Cancelar' name='Cancelar'>
					</input><input type='submit' value='Excluir' name='Excluir'></input>";
		}else{
			$edita=$_GET['editar'];
			$sql_consult="SELECT * FROM tbproduto INNER JOIN tbnomeproduto ON codNomeProduto=codigoNomeProduto WHERE codigoProduto='$edita'";
			$sql_consult2="SELECT * FROM tbnomeproduto";
			$result_consult2=mysqli_query($con,$sql_consult2);
			$result_consult=mysqli_query($con,$sql_consult);
			echo "<form action='editar.php' method='POST'>";
			foreach ($result_consult as $show) {
				# code...
				echo  "<tr><td><input type='text' name='codigoProduto' value='" . $show['codigoProduto'] . "'></input></td>";
				echo "<td><select name='nomeProduto'>";
				foreach ($result_consult2 as $show2) {
					echo "<option value='" . $show2['codigoNomeProduto'] . "'>" . $show2['nomeProduto']
				. "</option>";
				}
				echo "</select></td>";
				echo "<td><input type='text' name='descricaoProduto' value='" . $show['descricaoProduto'] . "'></input></td>";
				echo "<td><input type='text' name='valorProduto' value='" . $show['valorProduto'] . "'></input></td></tr>";
			}
			echo "</table>";
			echo "<input type='hidden' name='codigoProdutoP' value='" . $show['codigoProduto'] . "'</input>";
			echo "<input type='submit' value='Cancelar' name='Cancelar'></input>";
			echo "<input type='submit' value='Editar' name='edita'</input></form>";
		}
		mysqli_close($con);
	}
	confirm();
?>
</div>
	</section>
</body>
</html>