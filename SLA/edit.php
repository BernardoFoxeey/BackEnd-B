<?php
$conn = new mysqli("localhost", "root", "bernardo2026", "db_joins");

$id = $_GET["id_usuario"];  
$result = $conn->query("SELECT * FROM usuarios WHERE id_usuario=$id");
$row  = $result->fetch_assoc();
?>

<form action="atualizar.php" method="POST">
    <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario']; ?>">
    Nome: <input type="text" name="nome" value="<?php echo $row['nome']; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
    
    <input type="submit" value="Salvar">
</form>