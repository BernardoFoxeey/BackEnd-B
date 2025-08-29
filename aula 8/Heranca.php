<?php
class Imovel {
    private $categoria;
    private $N_comodos;
    private $valor;
    private $estado_onservacao;

    public function __construct($categoria, $N_comodos, $valor, $estado_onservacao) {
        $this->categoria = $categoria;
        $this->N_comodos = $N_comodos;
        $this->valor = $valor;
        $this->estado_onservacao = $estado_onservacao;
       
    }
}

class Casa extends Imovel {
    private $tem_quintal;

    public function __construct($categoria, $N_comodos, $valor, $estado_onservacao, $tem_quintal) {
        parent::__construct($categoria, $N_comodos, $valor, $estado_onservacao);

        $this->tem_quintal = $tem_quintal;
 }

}

class Arpatamento extends Imovel {
    private $andar;

    public function __construct($categoria, $N_comodos, $valor, $estado_onservacao, $andar) {
        parent::__construct($categoria, $N_comodos, $valor, $estado_onservacao, $andar);

        $this->andar = $andar;
    }
}

// crie uma subclasse chamada Escola com o atributo $seguimento

class Banco extends Imovel {
    private $seguimento;
    public function __construct($categoria, $N_comodos, $valor, $estado_onservacao, $seguimento) {
        parent::__construct($categoria, $N_comodos, $valor, $estado_onservacao);

        $this->seguimento = $seguimento;
    }
}