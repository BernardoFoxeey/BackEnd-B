<?php
// CURD - Create, Read, Update, Delete

class AlunoDAO { // "DAO" significa Data Access Object
    private $alunos =[]; // Array para armazenameno temporário dos objetos e seus atributos, antes de mandar para o banco de dados. Foi criado inicialmmente vazio [];

    public function criarAluno(Aluno $aluno) { //Método Create --> para criar um novo objeto
        $this->alunos[$aluno->getId()]= $aluno;
    }

    public function lerAluno() { // Método Read --> para ler informações de um objeto já criado
        return $this->alunos;
    }

    public function atualizarAluno($id, $novoNome, $novoCurso) {
        if (isset($this->alunos[$id])) {
            $this->alunos[$id]->setNome($novoNome);
            $this->alunos[$id]->setCurso($novoCurso);
        }
        
    }

    public function excluirAluno($id) {
        unset($this->alunos[$id]);  

    }
}