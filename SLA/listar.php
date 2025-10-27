<?php
$conn = new mysqli("localhost", "root", "bernardo2026", "db_joins");
$result = $conn->query("SELECT * FROM usuarios");

echo "<h2>Usuários</h2>";
echo "<table border='1'>";
echo "<tr><tr>ID</th><th>Nome</th><th>Email</th><th>Ações</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id_usuario']}</td>
        <td>{$row['nome']}</td>
        <td>{$row['email']}</td>
        <td><a href='edit.php?id_usuario={$row['id_usuario']}'>Editar</a></td>
        </tr>";
}
echo "</table>";
$conn->close();
?>