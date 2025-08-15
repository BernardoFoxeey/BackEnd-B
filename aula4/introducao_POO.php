<?php
$modelo_carro1="versa";
$marca_carro1="nissan";
$ano_carro1=2020;
$revisao_carro=true;
$Ndonos_carro1=2;

$modelo_carro2="m5";
$marca_carro2="bmw";
$ano_carro2=2018;
$revisao_caro=false;
$Ndonos_carro2=2;

$modelo_carro3=911;
$marca_carro3="porsche";
$ano_carro3= 2026;
$revisao_caro=false;
$Ndonos_carro3=1;

$modelo_carro4="dolphim";
$marca_carro4="BYD";
$ano_carro4=2023;
$revisao_carro4=false;
$Ndonos_carro4=1;

function passouRevisao($revisaoF): bool {
    $revisao=false;
    return $revisaoF;
}

$revisao_carro4 = passouRevisao($revisao_carro4);

function novoDono($donos): int {
    return $donos + 1;
}

$Ndonos_carro4 = novoDono($Ndonos_carro4);

?>