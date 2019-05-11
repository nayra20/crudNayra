<?php
 
	include_once 'conexao.php';
	 
	// pega os dados do formuário
	$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
	$email = isset($_POST['email']) ? $_POST['email'] : null;
	$senha = isset($_POST['senha']) ? $_POST['senha'] : null;

	// insere no banco
	$PDO = db_connect();
	$sql = "INSERT INTO cliente(nome, email, senha) VALUES(:NOME,:EMAIL,:SENHA)";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(':NOME', $nome);
	$stmt->bindParam(':EMAIL', $email);
	$stmt->bindParam(':SENHA', $senha);

	if ($stmt->execute()){
	    header('Location: form-list.php');
	}
	else{
	    echo "Erro ao cadastrar";
	    print_r($stmt->errorInfo());
	}

?>