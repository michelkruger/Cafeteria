<header id="header">
		<div id="main" class="main">
			<?php
				session_start(); 
			?>
			<script type="text/javascript">
				
				var user = "<?php echo $_SESSION['id_type_user']; ?>";
				var name = "<?php echo $_SESSION['name']; ?>";

				if (user == 1) {
					 document.getElementById("main").innerHTML = "<h1><a href='../index/index.html'>Coffee<span>Time</span></a></h1><ul><li><a href='../search/search.html'>Pesquisa</a></li></li><li><a href='../cadastro_produtos/cadastro.php'>Cadastro</a></li><li><a href='nome_produto.php'>Nome produtos </a></li><li>"+name+"</li><li><a>Logout</a></li></ul>";
				}else{
					document.getElementById("main").innerHTML = "<h1><a href='../index/index.html'>Coffee<span>Time</span></a></h1><ul><li><a href='../search/search.html'>Pesquisa</a></li></li><li>"+name+"</li><li><a>Logout</a></li></ul>";
				}
			</script>	
	</header>


