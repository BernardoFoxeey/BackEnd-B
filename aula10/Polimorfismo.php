<?php
// Polimorfismo

// O termo Polimorfismo significa "várias formas". Associando isso a Progamação Orientada a Ojetos , o conceito se trata de varias classe e suas instâncias (objetos) respndendo a um mesmo método de formas diferentes, No exempli do interface da Aula_09, temos um método CalcularArea() que responde de forma diferente á classe Quadrado, à classe Pentagono e a clase Círvculo. Isso quer dizer que a função é a mesma  - calcular a área da forma geométrica - mas a operação muda de acordo com a figura.


// Cire um metedo chamado "mover()", aonde ele resonde de varias formas diferentes, para as sub-classes: Carro, Avião, Barco e Elevador. Dica: utilize interfaces.


interface veiculo {
    public function mover();
}

class Carro implements veiculo {
    public function mover() {
        echo "O carro está se movendo na estrada.\n";
    }
}

class Aviao implements veiculo {
    public function mover() {
        echo "O avião está voando no céu.\n";
    }
}

class Barco implements veiculo {
    public function mover() {
        echo "O barco está navegando no mar.\n";
    }
}

class Elevador implements veiculo {
    public function mover() {
        echo "O elevador está subindo ou descendo no prédio.\n";
    }
}