<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Produtos.</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/Cadastro_pessoa.css">
</head>
<body>
	<header id="header">
		<div class="main">
			<h1><a href="../index/index.html">Coffee<span>Time</span></a></h1>
			<ul>
				<li><a href="">Produtos</a></li>
				<li><a href="../search/search.html">Pesquisa</a></li></li>
				<li><a href="../cadastro_produtos/cadastro.html">Cadastro</a></li>
				<li><a href="../cadastro_pessoa/cadastro_pessoa.html">Usuário</a></li>
			</ul>
		</div>
	</header>
	<form id="form" method="POST" action="../php/cadastro.php">
		<div class="arrumar">
			<h4>Cadastro Usuário</h4>

				<!-- Input Nome -->
				<label class="label">Nome:</label>
				<input type="text" name="nomeUsuario" placeholder="nome do produto: " class="input">

				<!-- Input valor -->
				<label class="label">CPF:</label>
				<input type="number" name="cpfUsuario"  placeholder="valor do produto: " class="input">

				<!-- Input Id -->
				<label class="label">Email:</label>
				<input type="number" name="emailUsuario"  placeholder="id do produto: " class="input">		
<?php
	require_once("conect_bd.php");
	function construct_pessoa(){
		$con=conect();
		$usuario_consult="SELECT * FROM tbtipo_usuario";
		$result_consult=mysqli_query($con,$usuario_consult);
		echo "<select name='usuarioTipo'>";
		foreach ($result_consult as $exibe_result) {
			echo "<option value='" . $exibe_result['idUsuario'] . "'>" . $exibe_result['tipoUsuario'] . "</option>";
		}
		mysqli_close($con);
	}
		construct_pessoa();
?>
<!-- input de envio -->
			
				<input type="submit" name="enviar" value="Buscar" class="input input_enviar">

			</div>
	</form>
	</body>
</html>