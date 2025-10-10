<?php
// Classes:

// Heroi (subclasses: Batman, Superman, HomemAranha)

// Missao

// Treinamento

// Shopping

// Crianca

// Brinquedo

// Métodos:

// fazerTreinamento(Treinamento t)

// realizarMissao(Missao m)

// irAoShopping()

// doarBrinquedo(Crianca c, Brinquedo b)

class Heroi {
    public $nome;

    function __construct($nome) {
        $this->nome = $nome;
    }

    function fazerTreinamento($local) {
        echo "$this->nome está treinando em $local.<br>";
    }

    function realizarMissao($missao) {
        echo "$this->nome está realizando a missão: $missao.<br>";
    }

    function irAoShopping() {
        echo "$this->nome foi ao shopping.<br>";
    }

    function doarBrinquedo($crianca) {
        echo "$this->nome doou brinquedos para $crianca.<br>";
    }
}

// Exemplo de uso
$heroi = new Heroi("Batman");
$heroi->fazerTreinamento("Academia da Liga da Justiça");
$heroi->realizarMissao("Salvar Gotham City");
$heroi->irAoShopping();
$heroi->doarBrinquedo("Crianças carentes");
