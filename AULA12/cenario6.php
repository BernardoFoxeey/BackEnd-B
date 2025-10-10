<?php
// Classes:

// Cinema

// Cliente

// Filme

// Sessao

// Ingresso

// Métodos:

// comprarIngresso(Cliente c, Sessao s)

// exibirFilme(Filme f)

// listarSessoes()

class Cliente {
    public $nome;

    function __construct($nome) {
        $this->nome = $nome;
    }
}

class Filme {
    public $titulo;

    function __construct($titulo) {
        $this->titulo = $titulo;
    }
}

class Sessao {
    public $horario;

    function __construct($horario) {
        $this->horario = $horario;
    }
}

class Cinema {
    function comprarIngresso($cliente, $filme, $sessao) {
        echo "$cliente->nome comprou ingresso para '$filme->titulo' às $sessao->horario.<br>";
    }

    function listarSessoes() {
        echo "Listando sessões disponíveis...<br>";
    }
}

// Exemplo
$cliente = new Cliente("Ana");
$filme = new Filme("Vingadores");
$sessao = new Sessao("20:00");
$cinema = new Cinema();
$cinema->comprarIngresso($cliente, $filme, $sessao);
?>

