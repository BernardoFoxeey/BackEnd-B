<?php
function ehSeminovo($ano) {
    $tempoUso = date("Y") - $ano;
    if ($tempoUso <= 3) {
        return "Sim";
    } else {
        return "Não";
    }
}

$marca1 = "nissan";
$modelo1 = "R34";
$ano1 = 2002;

$marca2 = "bmw";
$modelo2 = "m5";
$ano2 = 2018;

$marca3 = "porsche";
$modelo3 = "911";
$ano3 = 2026;

$seminovo1 = ehSeminovo($ano1);
echo "O carro $modelo1 da marca $marca1 é seminovo? $seminovo1\n";

$seminovo2 = ehSeminovo($ano2);
echo "O carro $modelo2 da marca $marca2 é seminovo? $seminovo2\n";

$seminovo3 = ehSeminovo($ano3);
echo "O carro $modelo3 da marca $marca3 é seminovo? $seminovo3\n";
