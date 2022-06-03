<?php include("cabecalho.php");
	  include("conecta.php"); 
	  include("banco-clientes.php"); ?>
<?php 
if (array_key_exists('removido',$_GET) && $_GET['removido']=="true") {
?>
		<p class="text-success">Cliente removido!</p>
<?php
	}
?>


<table class= "table table-striped table-bordered">
	<?php	   
		$allclientes = listaClientes($conexao); 
		foreach ($allclientes as $clientes) :
	?>
		<tr>
			<td><?= $clientes['codcliente'] ?></td>
			<td><?= $clientes['nomecli'] ?></td>
			<td><?= $clientes['cpf'] ?></td>
			<td><?= $clientes['email'] ?></td>
			<td>
				<form action="remove-clientes.php" method="post">
				<input type="hidden" name="id" value="<?=$clientes['codcliente']?>">
					<button class="btn-danger">Remover</button>
				</form>
			</td>
		</tr>
	<?php
	 	endforeach 
	?>
</table>

<?php include("rodape.php");?>