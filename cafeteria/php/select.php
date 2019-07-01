<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Produtos.</title>
	<link rel="stylesheet" type="text/css" href="../css/resultado.css">
</head>
<body>
	<?php 
	include('../header/header.php');
	 ?>
	<section id="forma">
		<div class="tablediv">
<?php
	require_once("conect_bd.php");
	function select(){
		error_reporting(0);
		ini_set(“display_errors”, 0 );
		$con = conect();
		$nome=$_POST['nomeProduto'];
		$id=$_POST['idProduto'];
		$valor=$_POST['valorProduto'];
		$escolha=$_POST['select'];
		if(empty($nome) && empty($id) && empty($valor)){
			$sql="SELECT * FROM tbproduto INNER JOIN tbnomeproduto ON codNomeProduto=codigoNomeProduto ORDER BY $escolha";
		}else if(empty($nome) && empty($valor) && !empty($id)){
			$sql= "SELECT * FROM tbproduto INNER JOIN tbnomeproduto ON codNomeProduto=codigoNomeProduto WHERE codigoProduto LIKE '$id%' ORDER BY $escolha";
		}else if(empty($id) && empty($nome) && !empty($valor)){
			$sql="SELECT * FROM tbproduto INNER JOIN tbnomeproduto ON codNomeProduto=codigoNomeProduto WHERE valorProduto LIKE '$valor% ' ORDER BY $escolha";
		}else if(empty($id) && empty($valor) && !empty($nome)){
			$sql="SELECT * FROM tbproduto INNER JOIN tbnomeproduto ON codNomeProduto=codigoNomeProduto WHERE nomeProduto LIKE '$nome%' ORDER BY $escolha";
		}else if(empty($id) && !empty($valor) && !empty($nome)){
			$sql="SELECT * FROM tbproduto INNER JOIN tbnomeproduto ON codNomeProduto=codigoNomeProduto WHERE nomeProduto LIKE '$nome%' AND '$valor'% ORDER BY $escolha";
		}else if(empty($valor) && !empty($id) && !empty($nome)){
			$sql="SELECT * FROM tbproduto INNER JOIN tbnomeproduto ON codNomeProduto=codigoNomeProduto WHERE nomeProduto LIKE '$nome%' AND '$id'% ORDER BY $escolha";
		}else if(empty($nome) && !empty($valor) && !empty($id)){
			$sql="SELECT * FROM tbproduto INNER JOIN tbnomeproduto ON codNomeProduto=codigoNomeProduto WHERE codigoProduto LIKE '$id%' AND '$valor'% ORDER BY $escolha";
		}else{
			$sql="SELECT * FROM tbproduto INNER JOIN tbnomeproduto ON codNomeProduto=codigoNomeProduto WHERE codigoProduto='$id' AND nomeProduto LIKE '$nome%' AND (valorProduto='$valor%') ORDER BY $escolha";
		}
		$consult_bd=mysqli_query($con, $sql);
		$line=mysqli_num_rows($consult_bd);
		if($line==0){
			echo "<p>Nenhum registro retornou</p><form action='../search/search.html'><input type='submit' value='retornar'></input></form>";
		}else{
				echo "Foram encontrados " . $line . " registros";
				echo "<table border='1'>
					<tr>
						<th>Id do Produto</th>
						<th>Nome do Produto</th>
						<th>Valor do Produto</th>
						<th>Deletar</th>
						<th>Editar</th>
					</tr>";
				foreach ($consult_bd as $result_consult){
					echo "<tr><td>" . $result_consult['codigoProduto'] . "</td>";
					echo "<td>" . $result_consult['nomeProduto'] . "</td>";
					echo "<td>" . $result_consult['valorProduto'] . "</td>";
					echo "<td><form action='delete.php' method='get'><a href='delete.php?delete=" . $result_consult['codigoProduto'] . "' name='delete'><img id='deletando' src='delete.png'</img></a></td>";
					echo "<td><a href='delete.php?editar=" . $result_consult['codigoProduto'] . "' name='editar'><img src='editar.png' id='editando'></img></a></form></tr>";
				}
		}
		mysqli_close($con);
	}
	select();
?>
</table>
</div>
	<style type="text/css">
		#editando{
			width: 40px;
			height: 35px;
		}
		#deletando{
			width: 40px;
			height: 35px;		
		}
	</style>
	</section>
	</style>
</body>
</html>