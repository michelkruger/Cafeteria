<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Produtos.</title>
	<link rel="stylesheet" type="text/css" href="../css/resultado.css">
	<meta charset="utf-8">
</head>
<body>
	<?php 
	include('../header/header.php');
	 ?>
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
				echo "<br><br><form action='../search/search.php'><p>Não foi possível realizar a exclusão do registro";
			}else{
				echo "<br><br><form action='../search/search.php'><p>Registro excluido com sucesso!";
			}
		}else{
			echo "<br><br><form action='../search/search.php'><p>Exclusão cancelada.";
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
