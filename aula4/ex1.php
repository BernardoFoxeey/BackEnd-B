<?php

$nome_carro= "R34";
$nome_marca='nissan';
$ano_carro=1999;
$Ndonos_carro=3;
$revisao_carro= true;
echo"O nome do carro é ".$nome_carro. "foi lançado no ano".$ano_carro. "da marca" .$nome_marca."e só possuem 3
donos";

function exibirCarro($nome_carro, $nome_marca, $ano_carro, $Ndonos_carro, $revisao_carro) {
    echo "O nome do carro é $nome_carro, foi lançado no ano $ano_carro, da marca $nome_marca e só possui $Ndonos_carro donos. ";
    if ($revisao_carro) {
        echo "O carro passou pela revisão.";
    } else {
        echo "O carro não passou pela revisão.";
    }
}



$nome_carro2= "kadete";
$nome_marca2= "chevrolet";
$ano_carro2= 1998;
$Ndonos_carro2= 11000;
$revisao_carro2= true;

function exibirCarro2($nome_carro2, $nome_marca2, $ano_carro2, $Ndonos_carro2, $revisao_carro2) {
    echo "O nome do carro é $nome_carro2, foi lançado no ano $ano_carro2, da marca $nome_marca2 e só possui $Ndonos_carro2 donos. ";
    if ($revisao_carro2) {
        echo "O carro passou pela revisão.";
    } else {
        echo "O carro não passou pela revisão.";
    }
}


$nome_carro3= "civic type R";
$nome_carro3="Honda";
$ano_carro3="2023";
$Ndonos_carro3= 100;
$revisao_carro3= true;

function exibirCarro3($nome_carro3, $nome_marca3, $ano_carro3, $Ndonos_carro3, $revisao_carro3) {
    echo "O nome do carro é $nome_carro3, foi lançado no ano $ano_carro3, da marca $nome_marca3 e só possui $Ndonos_carro3 donos. ";
    if ($revisao_carro3) {
        echo "O carro passou pela revisão.";
    } else {
        echo "O carro não passou pela revisão.";
    }
}



$nome_carro4= "golf";
$nome_carro4= "volkswagen";
$ano_carro4= 2002;
$Ndonos_carro4= 10000;
$revisao_carro4= true;

function exibirCarro4($nome_carro4, $nome_marca4, $ano_carro4, $Ndonos_carro4, $revisao_carro4) {
    echo "O nome do carro é $nome_carro4, foi lançado no ano $ano_carro4, da marca $nome_marca4 e só possui $Ndonos_carro4 donos. ";
    if ($revisao_carro4) {
        echo "O carro passou pela revisão.";
    } else {
        echo "O carro não passou pela revisão.";
    }
}
