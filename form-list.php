
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Crud nayra</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<?php 
	include_once 'menu.php';
?>


	<div class="container">
		<form  method="post" class="form-group">

			<table class="table text-white mt-3">
				<thead class="bg-info">
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Senha</th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody style="background-color: rgba(0,0,0,0.6);">
					<?php 

						include_once 'conexao.php';

						$conn = db_connect();

						$consulta = $conn->query("SELECT * FROM cliente");
                    
						while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
							echo "

								<tr>
									<td>{$linha['id']}</td>
									<td>{$linha['nome']}</td>
									<td>{$linha['email']}</td>
									<td>{$linha['senha']}</td>
									<td></td>
									<td></td>
									<td></td>
									<td>
	                                <a href='form-edit.php?id={$linha['id']}'><button type='button' class='btn btn-sm btn-warning'>EDITAR</button></a>
	                                <a href='delete.php?id={$linha['id']}'><button type='button' class='btn btn-sm btn-danger'>EXCLUIR</button></a>
                            </td>
								</tr>


							";
						}

					?>
				</tbody>
			</table>
		
		</form>
	</div>

	<script type="text/javascript" src="js/all.min.js"></script>
</body>
</html>