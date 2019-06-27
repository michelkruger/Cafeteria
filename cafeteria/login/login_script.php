<?php
	require_once("../php/conect_bd.php");
	$con=conect();
	$user=$_POST['user'];
	$password=$_POST['senha'];
	$password=md5($password);
	$sql="SELECT * FROM tbusuario WHERE emailUsuario='$user' AND senhaUsuario='$password'";
	$search=mysqli_query($con,$sql);
	mysqli_close($con);
	if(mysqli_num_rows($search)>0){
		session_start();
		$array_broken=mysqli_fetch_array[$search];
		$_SESSION['id_type_user']=$array_broken['idTipoUsuario'];
		$_SESSION['name']=$array_broken['nomeUsuario'];
		$_SESSION['login']=$user;
		$_SESSION['password']=$user;
		header("Location: ../index/index.php");
	}else{
		unset($_SESSION['id_type_user']);
		unset($_SESSION['login']);
		unset($_SESSION['password']);
		echo "Não foi possível efetuar o login";
	}
?>