<?php
// Classes:

// Turista

// Lugar (ou subclasses: Japão, Brasil, Acre)

// ComidaTípica

// Rio

// Praia

// Métodos:

// viajar() – Turista viaja para um lugar

// visitar(Lugar l) – Turista visita um local

// comer(ComidaTípica c) – Turista come comida típica

// nadar() – Turista nada em rio ou praia

class Turista {
    public $nome;

    function __construct($nome) {
        $this->nome = $nome;
    }

    function viajar($lugar) {
        echo "$this->nome está viajando para $lugar.<br>";
    }

    function visitar($lugar) {
        echo "$this->nome está visitando $lugar.<br>";
    }

    function comer($comida) {
        echo "$this->nome está comendo $comida.<br>";
    }

    function nadar($local) {
        echo "$this->nome está nadando em $local.<br>";
    }
}

// Exemplo de uso
$turista = new Turista("Alice");
$turista->viajar("Japão");
$turista->visitar("Templo de Kyoto");
$turista->comer("Sushi");
$turista->nadar("Rio Sumida");
?>