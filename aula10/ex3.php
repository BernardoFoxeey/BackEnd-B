<?php

// // Crie uma classe abstrata `Transporte` com o método `mover()`. Implemente as classes:

// - `Carro` → "O carro está andando na estrada",
// - `Barco` → "O barco está navegando no mar",
// - `Avião` → "O avião está voando no céu".
// - `Elevador` → "O Elevador está correndo pelo no prédio".

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