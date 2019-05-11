<?php 
	include_once 'conexao.php';

	// pega o ID da URL
	$id = isset($_GET['id']) ? $_GET['id'] : null;
	 
	// busca os dados du usuário a ser editado
	$PDO = db_connect();
	$sql = "SELECT id, nome, email, senha FROM cliente WHERE id = :ID";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(':ID', $id, PDO::PARAM_INT);
	 
	$stmt->execute();
	 
	$user = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Crud nayra</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<?php 
		include_once 'menu.php'
	?>

	<div style="display: hidden; height: 64px;"></div>

	<div class="container">
		<form  method="post" action="edit.php" class="form-group">

			<div class="h1 text-center text-white mt-5">EDITE SEUS DADOS</div>

			<table class="table">


				<div class="row">
					<div class="col-sm-12 md-12 lg-12">
						<input type="hidden" name="id" class="form-control" value="<?php echo $user['id'] ?> ?>" required="">
					</div>	
					<div class="col-sm-12 md-12 lg-12">
						<label>Nome:</label>
						<input type="text" name="nome"  value="<?php echo $user['nome'] ?>" class="form-control" required="">
					</div>	
			

					<div class="col-sm-12 md-12 lg-12">
						<label>Email:</label>
						<input type="email" name="email" class="form-control" value="<?php echo $user['email'] ?>" required="">
					</div>
			

					<div class="col-sm-12 md-12 lg-12">
						<label>Senha:</label>
						<input type="text" name="senha" value="<?php echo $user['senha'] ?>" class="form-control" required="">
					</div>

					<div class="col-sm-4 md-4 lg-4">			
						
					</div>

					<div class="col-sm-4 md-4 lg-4 text-center">			
						<button type="submit" class="btn btn-success mt-3">EDITAR</button>
					</div>			

					<div class="col-sm-4 md-4 lg-4">			
						
					</div>						
				</div>
			
			</table>
		</form>
	</div>
</body>
</html>