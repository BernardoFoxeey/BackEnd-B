<?php
// Classes:

// Biblioteca

// Usuario (subclasses: Aluno, Professor)

// Livro

// Revista

// Emprestimo

// Métodos:

// realizarEmprestimo(Usuario u, Item i)

// devolverItem(Usuario u, Item i)

// cadastrarUsuario()

// buscarItem()

class Usuario {
    public $nome;

    function __construct($nome) {
        $this->nome = $nome;
    }
}

class Item {
    public $titulo;

    function __construct($titulo) {
        $this->titulo = $titulo;
    }
}

class Biblioteca {
    function realizarEmprestimo($usuario, $item) {
        echo "$usuario->nome pegou emprestado '$item->titulo'.<br>";
    }

    function devolverItem($usuario, $item) {
        echo "$usuario->nome devolveu '$item->titulo'.<br>";
    }

    function cadastrarUsuario($nome) {
        echo "Usuário $nome cadastrado na biblioteca.<br>";
    }

    function buscarItem($titulo) {
        echo "Buscando item: $titulo.<br>";
    }
}

// Exemplo de uso
$biblioteca = new Biblioteca();
$usuario = new Usuario("Carlos");
$item = new Item("1984 de George Orwell");
