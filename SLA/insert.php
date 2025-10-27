<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];

$conn = new mysqli("localhost", "root", "bernardo2026", "atvcru");

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "INSERT INTO cadastro (nome, email, cidade) VALUES ('$nome', '$email', '$cidade')";
if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $conn->error;
}

exit;
$conn->close();
?>