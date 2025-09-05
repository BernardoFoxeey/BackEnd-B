<?php


// Supondo que a classe imovel não foi definida, vamos defini-la primeiro
class imovel {
    public $endereco;
    public $preco;

    public function __construct($endereco, $preco) {
        $this->endereco = $endereco;
        $this->preco = $preco;
    }

    public function exibirDetalhes() {
        echo "Endereço: " . $this->endereco . "<br>";
        echo "Preço: R$ " . $this->preco . "<br>";
    }
}

// Crie uma classe filha chamada comercio com o atributo $tamanho

class comercio extends imovel {
    public $tamanho;

    public function __construct($endereco, $preco, $tamanho) {
        parent::__construct($endereco, $preco);
        $this->tamanho = $tamanho;
    }

    public function exibirDetalhes() {
        parent::exibirDetalhes();
        echo "Tamanho: " . $this->tamanho . " m²<br>";
    }

}

