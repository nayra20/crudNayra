<?php 
	include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Crud nayra</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		
		body{
			background-image:url(img/fundo.jpg);
			background:cover;
			background-repeat: no-repeat;
		}

		label{
			font-weight: bold;
			color: white;
		}
	</style>
</head>
<body>

	<?php 
		include_once 'menu.php';
	?>

	<div class="container">

		<form  method="post" action="add.php" class="form-group">

			<div style="display: hidden; height: 110px;"></div>

			<div class="h1 text-center text-white">CADASTRE-SE</div>

			<table class="table">


				<div class="row">
					<div class="col-sm-12 md-12 lg-12">
						<label>Nome:</label>
						<input type="text"   placeholder="nayraLinda" name="nome" class="form-control" required="">
					</div>	
			

					<div class="col-sm-12 md-12 lg-12">
						<label>Email:</label>
						<input type="email"  placeholder="nayra@gmail.com" name="email" class="form-control" required="">
					</div>
			

					<div class="col-sm-12 md-12 lg-12">
						<label>Senha:</label>
						<input type="password" name="senha" placeholder="*********" class="form-control" required="">
					</div>

					<div class="col-sm-4 md-4 lg-4">			
						
					</div>

					<div class="col-sm-4 md-4 lg-4 text-center">			
						<button type="submit" class="btn btn-success mt-3">Cadastre-se</button>
					</div>			

					<div class="col-sm-4 md-4 lg-4">			
						
					</div>						
				</div>
			
			</table>
		</form>
</div>
</body>
</html>