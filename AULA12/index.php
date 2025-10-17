<?php

require_once 'crud.php';
require_once 'DAO.php';

//Objeto da classe AlunoDAO para greneciar os método do CRUD
$dao = new AlunoDAO();

// CREATE  
$dao->criarAluno(new Aluno(1, 'Maria', 'Engenharia'));

$dao->criarAluno(new Aluno(2, 'João', 'Medicina'));

$dao->criarAluno(new Aluno(3, 'Ana', 'Direito'));

$dao->criarAluno(new Aluno(4, 'Aurora', 'Arquitetura'));

$dao->criarAluno(new Aluno(5, 'Oliver', 'Director'));

$dao->criarAluno(new Aluno(6, 'Amanda', 'Lutadora'));

$dao->criarAluno(new Aluno(7, 'Geysa', 'Engenheira'));

$dao->criarAluno(new Aluno(8, 'Marcos', 'Professor'));

$dao->criarAluno(new Aluno(9, 'Bernardo', 'Streamer'));
// READ

echo "\nLista Inicial:\n";
foreach ($dao->lerAluno() as $aluno) {
    echo "{$aluno->getCurso()} - {$aluno->getNome()} - {$aluno->getId()} \n";
    
}

// UPDATE

$dao->atualizarAluno(3, 'João Silva', 'Odontologia');

echo "\nApós Atualização\n";
foreach ($dao->lerAluno() as $aluno) {
    echo "{$aluno->getCurso()} - {$aluno->getNome()} - {$aluno->getId()} \n";
}

$dao->atualizarAluno(7, 'Clotilde', 'Engenharia');
echo "\nApós Atualização\n";
foreach ($dao->lerAluno() as $aluno) {
    echo "{$aluno->getCurso()} - {$aluno->getNome()} - {$aluno->getId()} \n";
}

$dao->atualizarAluno(8, 'Joana', 'Professor');
echo "\nApós Atualização\n";
foreach ($dao->lerAluno() as $aluno) {
    echo "{$aluno->getCurso()} - {$aluno->getNome()} - {$aluno->getId()} \n";
}

$dao->atualizarAluno(9, 'Bernardo', 'Dev');
echo "\nApós Atualização\n";
foreach ($dao->lerAluno() as $aluno) {
    echo "{$aluno->getCurso()} - {$aluno->getNome()} - {$aluno->getId()} \n";
}

$dao->atualizarAluno(5, 'Oliver', 'Eletrica');
echo "\nApós Atualização\n";
foreach ($dao->lerAluno() as $aluno) {
    echo "{$aluno->getCurso()} - {$aluno->getNome()} - {$aluno->getId()} \n";
}

$dao->atualizarAluno(6, 'Amanda', 'Logistica');
echo "\nApós Atualização\n";
foreach ($dao->lerAluno() as $aluno) {
    echo "{$aluno->getCurso()} - {$aluno->getNome()} - {$aluno->getId()} \n";
}

// DELETE
$dao->excluirAluno(2);

echo "\nApós Exclusão\n";
foreach ($dao->lerAluno() as $aluno) {
    echo "{$aluno->getCurso()} - {$aluno->getNome()} - {$aluno->getId()} \n";
}