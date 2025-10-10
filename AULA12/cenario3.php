<?php
// Classes:

// Personagem (subclasses: JohnSnow, PapaiSmurf, Deadpool, Dexter)

// Jornada

// Chuva

// Dificuldade

// Métodos:

// iniciarJornada(Jornada j)

// amar(Personagem outro)

// superarDificuldade(Dificuldade d)

// celebrar()

// comerJuntos()


class Personagem {
    public $nome;

    function __construct($nome) {
        $this->nome = $nome;
    }

    function iniciarJornada() {
        echo "$this->nome iniciou a jornada.<br>";
    }

    function amar($outro) {
        echo "$this->nome está demonstrando amor por $outro.<br>";
    }

    function superarDificuldade() {
        echo "$this->nome superou as dificuldades.<br>";
    }

    function celebrar() {
        echo "$this->nome está celebrando.<br>";
    }

    function comerJuntos() {
        echo "$this->nome está comendo junto com os outros.<br>";
    }
}
// Exemplo de uso
$personagem = new Personagem("John Snow");
$personagem->iniciarJornada();
$personagem->amar("Daenerys");
$personagem->superarDificuldade();
$personagem->celebrar();
$personagem->comerJuntos();