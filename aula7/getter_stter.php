<?php
class Pessoas{
    private $nome;
    private $cpf;
    private $idade;
    private $email;
    private $telefone;
    private $senha;

    public function __construct($nome, $cpf, $idade, $email, $telefone, $senha){
        $this->setNome($nome); 
        $this->setCpf($cpf);
        $this->setIdade($idade);
        $this->email = $email;
        $this->telefone = $telefone;
        $this->senha = $senha;

    }

    public function setNome($nome): void{
    $this->nome= ucwords(string:strtolower(string:$nome));
}

    public function getNome(): mixed{
        return $this->nome;
}

public function setCpf($cpf): void{
    $this->cpf = preg_replace(pattern:'/\D/', replacement:'', subject:$cpf);
}

    public function getCpf(): mixed{
        return $this->cpf;

}

    public function setTelefone($telefone): void{
        $this->telefone = preg_replace(pattern:'/\D/', replacement:'', subject:$telefone);
        
        
    }

    public function getTelefone(): mixed{
        return $this->telefone; 
    }

    public function getIdade(): mixed{
        return $this->idade;
    }

    public function setIdade($idade): void{
        $this->idade = abs(num: (int)$idade);
    }
}

$aluno1 = new Pessoas("BErnArdo FELiciANO DO VAlE", "123.456.789-10", -19, -"teste@teste.com",
"(11) 99999-9999", "teste123");

