<?php
require_once 'conexao.php';
 
// pega o ID da URL
$id = isset($_GET['id']) ? $_GET['id'] : null;
 
// remove do banco
$conn = db_connect();
$sql = "DELETE FROM cliente WHERE id = :ID";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':ID', $id, PDO::PARAM_INT);
 
if ($stmt->execute())
{
    header('Location: form-list.php');
}
else
{
    echo "Erro ao remover";
    print_r($stmt->errorInfo());
}