<?php
$numero = readline(prompt:"Digite um número para ver sua tabuada: ");
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
}
?>