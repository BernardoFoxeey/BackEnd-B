<?php
$conn = new mysqli("localhost", "root", "bernardo2026", "db_joins");

$id = $_POST['id_usuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];

$sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id_usuario=$id, '$cidade'";

if ($conn->query($sql) === TRUE) {
    echo "Dados atualizados com sucesso";
    echo"<br><a href='index.html'>Voltar para o início</a>";

} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>