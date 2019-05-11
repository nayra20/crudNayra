<?php
 
include_once 'conexao.php';
 
$nome = isset($_POST['nome']) ? $_POST['nome'] :null;
$email = isset($_POST['email']) ? $_POST['email'] :null;
$senha = isset($_POST['senha']) ? $_POST['senha'] :null;
$id = isset($_POST['id']) ? $_POST['id'] : null;
 
// atualiza o banco
$PDO = db_connect();
$sql = "UPDATE cliente SET nome = :NOME, email = :EMAIL, senha = :SENHA WHERE id = :ID";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':NOME', $nome);
$stmt->bindParam(':EMAIL', $email);
$stmt->bindParam(':SENHA', $senha);
$stmt->bindParam(':ID', $id, PDO::PARAM_INT);
 
if ($stmt->execute())
{
    header('Location: form-list.php');
}
else
{
    echo "Erro ao alterar";
    print_r($stmt->errorInfo());
}