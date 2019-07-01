<script>
function ordena(idProduto,nomeProduto,valorProduto){
	if(empty(idProduto) && empty(nomeProduto) && !empty(valorProduto)){
		var select=valorProduto;
		windows.location.href=("../php/select.php"+select);
	}else if(empty(nomeProduto) && empty(valorProduto) !empty(idProduto)){
		var select=idProduto;
		windows.location.href=("../php/select.php"+select);
	}else{
		var select=nomeProduto;
		windows.location.href=("../php/select.php"+select);
	}
}
ordena();
</script>