<?php
class Usuario {
    public $nome;
    public $cpf;
    public $sexo;
    public $email;
    public $Estado_Civil;
    public $Cidade;
    public $Estado;
    public $Endereco;
    public $CEP;

    public function __construct($nome, $cpf, $sexo, $email, $Estado_Civil, $Cidade, $Estado, $Endereco, $CEP) {

    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->sexo = $sexo;
    $this->email = $email;
    $this->Estado_Civil = $Estado_Civil;
    $this->Cidade = $Cidade;
    $this->Estado = $Estado;
    $this->Endereco = $Endereco;
    $this->CEP = $CEP;


    }
    public function reservistar() {
     if ($this->sexo == "masculino") {
        echo"Apresente seu ertificado de reservista do tiro de guerra!";

     }  else {
        echo "Tudo Certo";
     }
        

}

    public function Casamento() {
        if (strtolower($this->Estado_Civil) == 'casado') {
            echo "Parabéns pelo seu casamento de {$this->anos_casado} anos!";
        } else {
            echo "oloco";
        }
    }
}

        



$usuario1 = new Usuario
(
    "Josenildo Afonso Souza" ,
    "100.200.300-40", 
    "Masculino", 
    "josenewdo.souza@gmail.com", 
    "Solteiro",
    "Xique-Xique",
    "Bahia", 
    "Rua da amizade, 99", 
    "40123-98"
);

$usuario2 = new Usuario("Valentina Passos Scherrer","070.070.060-70", "Feminino", "scherrer.valen@outlook.com", "Divorciada","Iracemapolis", "São Paulo", "Avenida da saudade, 1942", "23456-24");

$usuario2 = new Usuario("Claudio Braz Nepumoceno", "575.575.242-32", "Masculino", "Clauclau.nepumoceno@gmail.com", "Solteiro", "Piripiri", "Piauí", "Estrada 3 33","12345-99");



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

    public function late():void {
        echo"$this->nome está latindo!";
    }

    public function marcarteririo():void {
        echo "O cachorro $this->nome da $this->raca estar marcando territorio!";
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

