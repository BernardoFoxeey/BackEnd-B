<?php

class Calculadora {
    public function somar(...$numeros) {
        return array_sum($numeros);
    }
}

$calc = new Calculadora();
echo $calc->somar(2, 3) . "\n"; // Saída: 5
echo $calc->somar(1, 2, 3) . "\n"; // Saída: 6
echo $calc->somar(4, 5, 6, 7) . "\n"; // Saída: 22
