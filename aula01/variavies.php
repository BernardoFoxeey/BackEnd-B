 <?php
  echo"ola mundo \n";
  $nome = "Bernardo\n";
  $idade = "25";
  $ano_atual = "2025";

  $data_nasc= $ano_atual-$idade;
  echo $nome, "Voçê nasceu em:", $data_nasc;

  $exerc2="Programação em php";
  echo "\nMinúsculo: ", $exerc2;
  $exerc2= strtoupper(string: $exerc2);
  echo "\nMinusculo novamente: ", $exerc2;

  $exerc3= "O PHP foi criado em mil novecentos e noventa e cinco";
  echo "\nAntes do comando replace: \n", $exerc3;
  $exerc3= str_replace(search: ['o','a', 'i'], replace: ['0','4','1'], subject: $exerc3);
  echo "\nApós o comando replace: \n", $exerc3;
  ?>