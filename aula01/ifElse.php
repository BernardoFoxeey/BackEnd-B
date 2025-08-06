<?php
  $nota1 = 7.5;
  $nota2 = 6.0;
  $media = ($nota1 + $nota2) / 2;
    if ($media >= 6.0) {
        echo "Aluno aprovado com média: " . $media;
    } else {
        echo "Aluno reprovado com média: " . $media;
    }

    // implementar uma condição uqe verifique a presença do aluno
    $presenca = 73; // presença em porcentagem
    if ($presenca >= 75) {
        echo "\nAluno com presença suficiente.";   
    } else {
        echo "\nAluno com presença insuficiente.";
    }

    $nome = "Enzo Enrico";
    $presenca = 75; 
    $total = 5;    
    $nota2 = 6.5;
    $media = ($nota1 + $nota2) / 2;
    if ($presenca >= 75 && $media >= 6 || $nome == "Enzo Enrico") {
        echo "$nome, foi aprovado com média: $media e presença: $presenca%";
    } else {
        echo "$nome, foi reprovado com média: $media e presença: $presenca%";
    }

   