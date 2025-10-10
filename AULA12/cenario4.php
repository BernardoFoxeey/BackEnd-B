<?php
// Classes:

// Pessoa

// Sangue

// Escolha

// Métodos:

// engravidar()

// nascer()

// crescer()

// fazerEscolha(Escolha e)

// doarSangue(Pessoa receptor)

class Pessoa {
    public $nome;

    function __construct($nome) {
        $this->nome = $nome;
    }

    function engravidar() {
        echo "$this->nome está grávida.<br>";
    }

    function nascer() {
        echo "$this->nome nasceu.<br>";
    }

    function crescer() {
        echo "$this->nome está crescendo.<br>";
    }

    function fazerEscolha($escolha) {
        echo "$this->nome fez a escolha: $escolha.<br>";
    }

    function doarSangue($receptor) {
        echo "$this->nome doou sangue para $receptor.<br>";
    }
}
// Exemplo de uso
$pessoa = new Pessoa("João");
$pessoa->nascer();
$pessoa->crescer();
$pessoa->fazerEscolha("Estudar Programação");
$pessoa->engravidar();
$pessoa->doarSangue("Maria");
