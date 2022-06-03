<?php include("cabecalho.php");?>
		<h1>Formulario de Clientes</h1>
	<form action="adiciona-clientes.php" method="post">
		<table class="table">
			<tr>
				<td>Cliente: </td>
				<td> 
					<input class="form-control" type="text" name="cliente"><br/>
				</td>
			</tr>
			<tr>
				<td>CPF: </td>
				<td>
					<input class="form-control" type="number" name="cpf"><br/>
				</td>
			</tr>
			<tr>
				<td>Endereço: </td>
				<td>
					<input class="form-control" type="text" name="endereco"><br/>
				</td>
			</tr>
			<tr>
				<td>E-mail: </td>
				<td>
					<input class="form-control" type="text" name="email"><br/>
				</td>
			</tr>
			<tr>
				<td>Data de Nascimento: </td>
				<td>
					<input class="form-control" type="date" name="dtnascimento"><br/>
				</td>
			</tr>

				<tr>
					<td> <input class="btn btn-primary" type="submit" value="Salvar"></td>
				</tr>
		</table>
	</form>

<?php include("rodape.php");?>