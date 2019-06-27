<header id="header">
		<div class="main">
			<script type="text/javascript">
				session_start(); 
				var user = <?php echo $_SESSION['id_type_user']; ?>

				if (user == 1) {
					 document.getElementById("main").innerHTML = "<h1><a href='../index/index.html'>Coffee<span>Time</span></a></h1><ul><li><a href='../search/search.html'>Pesquisa</a></li></li><li><a href='../cadastro_produtos/cadastro.php'>Cadastro</a></li><li><a href='nome_produto.php'>Nome produtos </a></li><li>'<?php echo $_SESSION['name'];?>'</li><li><a>Logout</a></li></ul>";
				}else{
					document.getElementById("main").innerHTML = "<h1><a href='../index/index.html'>Coffee<span>Time</span></a></h1><ul><li><a href='../search/search.html'>Pesquisa</a></li></li><li>'<?php echo $_SESSION['name'];?>'</li><li><a>Logout</a></li></ul>";
				}
			</script>	
	</header>


