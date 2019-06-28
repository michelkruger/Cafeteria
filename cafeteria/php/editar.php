<?php
	function editando(){
		require_once('conect_bd.php');
		if(isset($_POST['edita'])){
			$con=conect();
			$edicao=$_POST['codigoProdutoP'];
			$np=$_POST['nomeProduto'];
			$cdp=$_POST['codigoProduto'];
			$dsp=$_POST['descricaoProduto'];
			$vp=$_POST['valorProduto'];
			$sql="UPDATE tbproduto SET codigoProduto='" . $cdp . "',descricaoProduto='" . $dsp . "',valorProduto='" . $vp . "',codNomeProduto= '". $np . "' WHERE codigoProduto='" . $edicao . "'";
			$editado=mysqli_query($con,$sql);
			mysqli_close($con);
			if(!$editado){
				echo "Infelizmente ocorreu um erro e não foi possível realizar a edição";
				echo "<a href='../index/index.php'>Voltar</a>";
			}else{
				echo "Edição concluída com sucesso!";
				echo "<a href='../index/index.php'>Voltar</a>";
			}
		}else{
			echo "Processo cancelado";
			echo "<a href='../index/index.php'>Voltar</a>";
		}
	}
	editando();
?>