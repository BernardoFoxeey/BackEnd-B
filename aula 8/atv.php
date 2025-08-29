<?php

class Carro {
    private $modelo;
    private $marca;

    public function __construct($modelo, $marca) {
        $this->modelo = $modelo;
        $this->marca = $marca;
    }


    public function getModelo() {
        return $this->modelo;
    }


    public function getMarca() {
        return $this->marca;

   }


   public function setmodelo($modelo) {
        $this->modelo = $modelo;
   }

   public function setMarca($marca) {
        $this->marca = $marca;
   }
}


$carro = new Carro("BRZ", "Subaru");

?>


<?php

class Pessoas {
    private $nome;
    private $idade;
    private $email;

    public function __construct($nome, $idade, $email) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
    }

    public function getNome() {
        return $this->nome;

}

public function getPidade() {
        return $this->idade;
}

public function getEmail() {
        return $this->email;
}

public function setNome($nome) {
        $this->nome = $nome;
}

public function setPidade($idade) {
    $this->idade = $idade;
}

public function setEmail($email) {
    $this->email = $email;
 }


}

$Pessoa = new Pessoas ("Bernardo", 19,"teste12@gmail.com");

?>


<?php

Class Aluno {
    private $nome;
    private $nota;

    public function __construct($nome, $nota) {
        $this->setNome($nome);
        $this->setnota($nota);
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setnota($nota) {
    if ($nota >= 0 && $nota <= 10) {
        $this->nota = $nota;
    } else {
        $this->nota = 0;
    }
    }

    public function getNome() {
        return $this->nome;
    }

    public function getnota() {
        return $this->nota;

    }


}

    $pessoa = new Aluno("Luiz", 9);

    echo $pessoa->getNome();
?>


<?php

class Produto {
    private $nome;
    private $preco;
    private $estoque;


    public function __construct($nome, $preco , $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $preco;
    }

    public function getNome() {
        return $this->nome;
}

public function getPreco() {
    return $this->preco;

}
public function getestoque() {
    return $this->estoque;
 }
}

$produto = new Produto("Camisa", 50, 10);
?>
<?php
class Funcionario {
    private $nome;
    private $salario;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSalario() {
        return $this->salario;
    }
}

$funcionario = new Funcionario();

$funcionario->setNome("João Silva");
$funcionario->setSalario(3000.00);

echo "Nome: " . $funcionario->getNome() . "\n";
echo "Salário: R$ " . $funcionario->getSalario() . "\n\n";

$funcionario->setNome("João Carlos Silva");
$funcionario->setSalario(3500.00);

echo "Nome: " . $funcionario->getNome() . "\n";
echo "Salário: R$ " . $funcionario->getSalario() . "\n";

?>