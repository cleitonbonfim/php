<?php include("cabecalho.php");
 include("conecta.php");
 include("banco-clientes.php");
 


 	$cliente = $_POST["cliente"];
 	$cpf = $_POST["cpf"];
 	$endereco = $_POST["endereco"];
 	$email = $_POST["email"];
 	$dtnascimento = $_POST["dtnascimento"];


		if (empty($cliente)) { ?>
	 		<p class="text-danger"><b>O nome do cliente está Vazio!!</b></p>
	 	<?php
	 	}elseif (empty($cpf)) { ?>
	 		<p class="text-danger"><b>O CPF do cliente está Vazio!!</b></p>
	 	<?php
	 	}elseif (empty($endereco)) { ?>
	 		<p class="text-danger"><b>O Endereço do cliente está Vazio!!</b></p>
	 	<?php
	 	}else{

			if(insereCliente($conexao, $cliente,$cpf,$endereco,$email,$dtnascimento)) {?>
				<p class="text-success">Cliente adicionado com sucesso!!!</p>
			<?php } 
			else{ ?>
				<p class="text-danger"><strong>Cliente não foi adicionado...</strong></p> 
				<?php
				}
			}

	mysqli_close($conexao);
?>

	
<?php include("rodape.php");?>