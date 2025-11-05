<?php
require_once __DIR__ . '/Bebidas.php';

class BebidaDAO {
    private $arquivo = 'bebidas.json';
    private $bebidas = [];

    public function __construct() {
        if (file_exists($this->arquivo)) {
            $conteudo = file_get_contents($this->arquivo);
            $dados = json_decode($conteudo, true);

            if ($dados) {
                foreach ($dados as $item) {
                    $bebida = new Bebidas(
                        $item['nome'],
                        $item['categoria'],
                        $item['volume'],
                        $item['valor'],
                        $item['qtde']
                    );
                    $this->bebidas[$item['nome']] = $bebida;
                }
            }
        }
    }

    private function salvarEmArquivo() {
        $dados = [];

        foreach ($this->bebidas as $bebidas) {
            $dados[] = [
                'nome' => $bebidas->getNome(),
                'categoria' => $bebidas->getCategoria(),
                'volume' => $bebidas->getVolume(),
                'valor' => $bebidas->getValor(),
                'qtde' => $bebidas->getQtde()
            ];
        }

        file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT));
    }

    public function criarBebida(Bebidas $bebidas){
        $this->bebidas[$bebidas->getNome()] = $bebidas;
        $this->salvarEmArquivo();
    }

    public function lerBebidas() {
        return $this->bebidas;
    }

    public function atualizarBebida($nome, $categoria, $volume, $valor, $qtde) {
        if (isset($this->bebidas[$nome])) {
            $this->bebidas[$nome]->setCategoria($categoria);
            $this->bebidas[$nome]->setVolume($volume);
            $this->bebidas[$nome]->setValor($valor);
            $this->bebidas[$nome]->setQtde($qtde);
        }
        $this->salvarEmArquivo();
    }

    public function excluirBebida($nome) {
        unset($this->bebidas[$nome]);
        $this->salvarEmArquivo();
    }
}
?>
