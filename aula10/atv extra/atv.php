<?php
interface Movel {
    public function mover();
}

interface Abastecivel {
    public function abastecer($quantidade);
}

interface Manutenivel {
    public function fazerManutencao();
}

class Carro implements Movel, Abastecivel, Manutenivel {
    public function mover() {
        echo "O carro está se movendo.\n";
    }

    public function abastecer($quantidade) {
        echo "O carro foi abastecido com $quantidade litros de combustível.\n";
    }

    public function fazerManutencao() {
        echo "O carro está passando por manutenção.\n";
    }
}

class Bicicleta implements Movel, Manutenivel {
    public function mover() {
        echo "A bicicleta está se movendo.\n";
    }

    public function fazerManutencao() {
        echo "A bicicleta está passando por manutenção.\n";
    }
}

class Onibus implements Movel, Abastecivel, Manutenivel {
    public function mover() {
        echo "O ônibus está se movendo.\n";
    }

    public function abastecer($quantidade) {
        echo "O ônibus foi abastecido com $quantidade litros de combustível.\n";
    }

    public function fazerManutencao() {
        echo "O ônibus está passando por manutenção.\n";
    }
}

