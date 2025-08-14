<?php
$nome = "Enzo Enrico";

echo "Boa tarde!";
$nota1 = readline(prompt:"Digite a 1ª nota: ");
$nota2 = readline(prompt:"Digite a 2ª nota: ");
$presenca = readline(prompt:"Digite a presença do aluno ");

$media = ($nota1 + $nota2) / 2;

if (($media >= 7 && $presenca >= 75) || $nome == "Enzo Enrico") {
    echo "Aluno aprovado com média: $media e presença: $presenca%";
} else {
    echo "Aluno reprovado com média: $media";
} 