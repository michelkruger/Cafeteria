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

<?php
	function delete(){
		error_reporting(0);
		ini_set(“display_errors”, 0 );
		require_once("conect_bd.php");
		$con=conect();
		$deletar=$_POST['Excluir'];
		$delete_id=$_POST['codigoProduto'];
		if(!empty($deletar)){
			$sql_delete="DELETE FROM tbproduto WHERE codigoProduto=$delete_id";
			$test=mysqli_query($con,$sql_delete);
			if(!$test){
				echo "<br><br><form action='../search/search.html'><p>Não foi possível realizar a exclusão do registro";
			}else{
				echo "<br><br><form action='../search/search.html'><p>Registro excluido com sucesso!";
			}
		}else{
			echo "<br><br><form action='../search/search.html'><p>Exclusão cancelada.";
		}
		echo "</p><input type='submit' value='Retornar'></input></form>";
		mysqli_close($con);
	}
	delete();
?>
	</div>
	</section>
</body>
</html>
