<?php
Class Cao {
    public $nome;
    public $raca;
    public $idade;
    public $castrado;
    public $sexo;

    public function __construct($nome, $raca, $idade, $castrado, $sexo) {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->idade = $idade;
        $this->castrado = $castrado;
        $this->sexo = $sexo;
    }
}

$cao1 = new Cao("Marley", "Labrador Retriever", "5", "true", "Macho");
$cao2 = new Cao("Snoopy", "Beagle", "3", "false", "Macho");
$cao3 = new Cao("Bidu", "Schnauzer", "6", "false", "Macho");
$cao4 = new Cao("Spike", "Pit Bull", "8", "ture", "Macho");
$cao5 = new Cao("Muick", "Corgis", "2", "true", "Macho");
$cao6 = new Cao("Milo", "ack Russell Terrier", "5", "true", "Macho");
$cao7 = new Cao("Bob", "Caramelo", "7", "False", "Macho");
$cao8 = new Cao("Bela", "Shih Tzu", "2", "False", "Femea");
$cao9 = new Cao("Totó", "Cairn Terrier", "1", "True", "Macho");
$cao10 = new Cao("Floquinho", "Lhasa Apso", "4", "true", "Macho");