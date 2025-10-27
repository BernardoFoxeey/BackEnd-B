<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$cida = $_POST['cidade'];

$conn = new mysqli("localhost", "root", "bernardo2026", "db_joins");

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email', '$cidade')";
if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $conn->error;
}

exit;
$conn->close();
?>