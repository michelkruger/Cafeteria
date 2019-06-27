<header id="header">
		<div id="main" class="main">
			<?php
				session_start(); 
			?>
			<script type="text/javascript">
				
				var user = "<?php echo $_SESSION['id_type_user']; ?>";
				var name = "<?php echo $_SESSION['name']; ?>";

				if (user == 2) {
					 document.getElementById("main").innerHTML = "<h1><a href='../index/index.php'>Coffee<span>Time</span></a></h1><ul><li><a href='../search/search.php'>Pesquisa</a></li></li><li><a href='../cadastro_produtos/cadastro.php'>Cadastro</a></li><li><a href='../nome_produto/nome_produto.php'>Nome produtos </a></li><li>"+name+"</li><li><a href='../index/logof.php'>Logout</a></li></ul>";
				}else{
					document.getElementById("main").innerHTML = "<h1><a href='../index/index.php'>Coffee<span>Time</span></a></h1><ul><li><a href='../search/search.php'>Pesquisa</a></li></li><li>"+name+"</li><li><a href='../index/logof.php'>Logout</a></li></ul>";
				}
			</script>	
	</header>


