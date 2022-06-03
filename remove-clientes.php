<?php include("cabecalho.php");
 include("conecta.php");
 include("banco-clientes.php");

 $id = $_POST['id'];
 removeClientes($conexao, $id);
 header("Location: chave-lista.php?removido=true");
 die();
 ?>
