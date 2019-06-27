<?php
	function cadastro_pessoa(){
		require_once('conect_bd.php');
		$con=conect();
		$nome=$_POST['nomeUsuario'];
		$cpf=$_POST['cpfUsuario'];
		$email=$_POST['emailUsuario'];
		$usuario=$_POST['usuarioTipo'];
		if(empty($nome) || empty($cpf) || empty($email) || empty($usuario)){
			header('Location: ../cadastro_pessoa/cadastro_pessoa0_1.php?test=1');
		}else{
			$insert="INSERT INTO tbusuario (nomeUsuario,cpfUsuario,emailUsuario,idTipoUsuario) VALUES ('$nome','$cpf','$email','$usuario')";
			$insert_bd=mysqli_query($con,$insert);
		}
		if(!$insert_bd){
			echo "erro de cadastro";
		}
	}
	cadastro_pessoa();
?>
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
				<li><a href="../php/construct_pessoa.php">Usuário</a></li>
				<li><a href="search.html">Pesquisa</a></li></li>
				<li><a href="../cadastro_produtos/cadastro.html">Cadastro</a></li>
				<li><a href="">Contate-nos</a></li>
			</ul>
		</div>
	</header>
	<section id="forma">
		<p>Cadastro efetuado com sucesso!</p>
		<br><br>
		<form action="../cadastro_pessoa/cadastro_pessoa0_1.php"><input type="submit" value="Retornar"></input></form>
	</section>
</body>
</html>