<?php

// Modificadores de aesso:
// Existem 3 tipos: public, private e protected
// public: NomeDoAtributo: métodos e atributos publicos
// private NomeDoAtributo: métodos e atributos privados para acesso apenas dentro da própria classe 
// getters e setters são métodos especiais para acessar atributos privados

// protected NomeDoAtributo: métodos e atributos protegidos para acesso dentro da própria classe e classes filhas

// Pacotes: sintaxe logo no inicio do codigo, que atribui de onde os arquivos pertencem, ou seja, o caminho da pasta onde o arquivo está

//Exemplo 

// namespace Aula 09;

//Caso tenham mais arquivos que forrmam o backend de uma página WEB  e possuem a mesma raiz, o namespace deve ser o mesmo.

namespace Aula09;

interface Pagamento {
    public function pagar($valor);
}

class CartaoDeCredito implements Pagamento {
    public function pagar($valor) {
        echo "pagamento realizado com cartão de crédito, valor: $valor\n";
    }
}

class PIX implements Pagamento {
    public function pagar ($valor) {
        echo "pagamento realizado com PIX, valor: $valor\n";


  }
}

// criar uma interface chamada forma que obrigue quap  classe a ter o um método chamado calcularArea().
interface Forma {
    public function calcularArea($area);
}
// dpois criar aas classes quadrado e circulo que implementam a interface forma e possuem o método calcularArea() que calcula a área do quadrado e do círculo, respectivamente.
class quadrado implements Forma {
    public function calcularArea($lado) {
        return $lado * $lado;
    }
}

class circulo implements Forma {
    public function calcularArea($raio) {
        return pi() * $raio * $raio;
    }

}

// exemplo de uso 
$Q = new quadrado(lado: 4);
echo "Área do quadrado: " . $quadrado->calcularArea(lado: 4) . "\n";

$c = new circulo(raio: 3);
echo "Área do círculo: " . $circulo->calcularArea(raio: 3) . "\n";

class Pentagono implements forma {

    public function calcularArea($lado, $raio) {
}