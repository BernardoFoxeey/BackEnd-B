<?php

interface Animal {
    public function fazerSom();
}

class Cachorro implements Animal {
    public function fazerSom() {
        echo "Au au!\n";
    }
}

class Gato implements Animal {
    public function fazerSom() {
        echo "Miau!\n";
    }
}

class Vaca implements Animal {
    public function fazerSom() {
        echo "Muuu!\n";
    }
}
