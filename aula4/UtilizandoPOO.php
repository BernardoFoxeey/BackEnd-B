<?php
class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $revisao;
    public $N_donos;

    public function __construct($marca, $modelo, $ano, $revisao, $N_donos) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->revisao = $revisao;
        $this->N_donos = $N_donos;
    }
}

$carro1 = new Carro("Porsche", "911", "2020", "true", "3");
$carro2 = new Carro("Dodge", "Challenger", "2018", "true", "50");
$carro3 = new Carro("Ford", "ShelbyGT500", "2021", "true", "23");
$carro4 = new Carro("Renault", "kwid", "2022", "false", "1");
$carro5 = new Carro("Mazda", "Rx7", "1998", "true", "2");
$carro6 = new Carro("Chevrolet", "Camaro", "2023", "true", "5");
?>