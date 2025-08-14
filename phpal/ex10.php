<?php
for ($i = 0; $i < 5; $i++) {
    echo "Menu:\n";
    echo "1 - Olá\n";
    echo "2 - Data Atual\n";
    echo "3 - Sair\n";
    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            echo "Olá!\n";
            break;
        case 2:
            echo "Data Atual: " . date('Y-m-d H:i:s') . "\n";
            break;
        case 3:
            echo "Saindo...\n";
            exit;
        default:
            echo "Opção inválida. Tente novamente.\n";
    }
    echo "\n";
}
?>