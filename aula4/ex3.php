<?php
function precisaRevisao($revisao, $ano) {
    if (!$revisao && $ano < 2022) {
        $revisao = 2020 - $ano; 
        return "Precisa de revisão";
    } else {
        return "Revisão em dia";
    }
    
}




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

$ano= 2022;
