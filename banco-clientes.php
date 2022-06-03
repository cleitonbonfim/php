<?php 
	function insereCliente($conexao, $cliente,$cpf,$endereco,$email,$dtnascimento){
		$query = "insert clientes (nomecli, cpf, endereco, email, dtnascimento) values ('{$cliente}', '{$cpf}', '{$endereco}', '{$email}', '{$dtnascimento}')";
		return mysqli_query($conexao, $query);
	}

	function listaClientes($conexao) {
		$allclientes = array();
		$resultado = mysqli_query($conexao, "select * from clientes");
		while($clientes = mysqli_fetch_assoc($resultado)) {
			array_push($allclientes, $clientes);			
		}
		return $allclientes;		
	}

	function removeClientes($conexao, $id) {
		$query = "delete from clientes where codcliente = {$id}";
		return mysqli_query($conexao,$query);
	}

