<?php
	function conect(){
		$servidor="localhost";
		$usuario="root";
		$senha="";
		$bd="cafeteria";
		$con= mysqli_connect($servidor,$usuario,$senha,$bd);
		if(!$con){
			die("Não conectou:");
		}
		return($con);
	}
?>