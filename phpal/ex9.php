<?php
$temperatura = readline(prompt:"Digite a temperatura em °C: ");
if ($temperatura < 15) {
    echo "Frio";
} elseif ($temperatura >= 15 && $temperatura <= 25) {
    echo "Agradável";
} elseif ($temperatura > 25) {
    echo "Quente";
}
?>

