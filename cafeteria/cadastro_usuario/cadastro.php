<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/cadastro_usuario.css">
</head>
<body>
	<form action="cadastro.php" class="container" method="POST" id="meuRei">

		<img src="../img/coffeee.jpg" class="img">
		<h1>Cadastro</h1>
		<!-- campos do formulário. -->
		<input type="text" name="nome" placeholder="Nome:" class="input" id="nome">
		<input type="text" name="email" placeholder="Email:" class="input" id="email">
		<input type="password" name="senha" placeholder="senha:" class="input" id="senha">
		<input type="password" name="senha2" placeholder="confirme sua senha: " class="input" id="senha2">
		<input type="number" name="cpf" placeholder="CPF:" class="input" id="cpf">

		<button class="enviar" type="button" onclick="confirmar()">Cadastrar</button>

		<!-- Esta div tem o propósito de mostrar a informação fornecida pelo código em javascript.-->
		<div id="submit"></div>

		
	</form>
	<script type="text/javascript">
		
		function confirmar() {
			var nome = document.getElementById("nome").value;
			var email = document.getElementById("email").value;
			var senha = document.getElementById("senha").value;
			var senha2 = document.getElementById("senha2").value;
			var cpf = document.getElementById("cpf").value;

			// condições para regular o formulário. 
			if(senha != senha2) {
				document.getElementById('submit').innerHTML = 'As senhas estão diferentes.';
			}else if (email == '' | senha == '' | senha2 == '' | nome == '' | cpf == ''){
			    document.getElementById('submit').innerHTML = 'Preencha todos os campos.'; 
			}else{
			    document.getElementById('submit').innerHTML = '';
			    document.getElementById("meuRei").submit();
			}
		}

	</script>

	<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome=$_POST['nome'];
            $email=$_POST['email'];
            $senha=$_POST['senha'];
            $cpf=$_POST['cpf'];
            $senha=md5($senha);
        	require_once('../php/conect_bd.php');             
            $con= conect();
            $sql= "INSERT INTO tbusuario(nomeUsuario,cpfUsuario,emailUsario,senhaUsuario,idTipoUsuario) VALUES ('$nome','$cpf','$email','$senha',1)";
            $resultado=mysqli_query($con,$sql);
            if(!$resultado){
            	echo "n foi possível";
            }
            mysqli_close($con);
            echo "<script> alert ('Cadastro Feito com sucesso!');</script>";
           // echo "<script>window.location = '../login/login.php';</script>";
        }
        ?>
</body>
</html>