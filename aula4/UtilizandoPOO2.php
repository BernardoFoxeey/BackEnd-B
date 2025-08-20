<?php
Class Usuario {
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
