<?php
/*
    Exercício 1 - Acesso a Elementos:
    Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana. */

$dias_semana = array("Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira,", "Quinta-Feira", "Sexta-Feira", "Sábado");

echo "O terceiro dia da semana é: " . $dias_semana[2] . "<br>";


/* Exercício 2 - Alteração de Elementos:
    Crie um array contendo os meses do ano. Altere o valor do último elemento para "Dezembro". */

$meses_ano = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro");

$meses_ano[10] = "Dezembro";

echo "O último mês do ano é: " . $meses_ano[10] . "<br>";

/* Exercício 3 - Adição de Elementos:
    Crie um array vazio. Adicione os números de 1 a 5 ao array. Depois, adicione o número 6 ao final do array. */

    $array_numeros=[];
    for ($i = 1; $i <= 5; $i++){
        $array_numeros[]= $i;

    }
 $array_numeros[]=6;
 echo "Array de números: ";
 print_r ($array_numeros);
 echo "<br>";


/* Exercício 4 - Percorrendo um Array:
    Crie um array contendo os nomes dos meses do ano. Utilize um loop foreach para exibir todos os meses. */

$meses_ano = array("Janeiro,", "Fevereiro,", "Março,", "Abril,", "Maio,", "Junho,", "Julho,", "Agosto,", "Setembro,", "Outubro,", "Novembro, Dezembro");

echo "Meses do Ano: <br>";
foreach ($meses_ano as $meses) {
    echo $meses . " ";
}
echo "<br>"; 

   /* Exercício 5 - Contagem de Elementos:
    Crie um array contendo os dias da semana. Conte quantos elementos o array possui e exiba o resultado. */

    $dias_semana = array("Domingo", "Segunda-Feira,", "Terça-Feira,", "Quarta-Feira,", "Quinta-Feira,", "Sexta-Feira,", "Sábado");

    echo "O número de elementos no array de dias da semana é de: " . count($dias_semana) . "<br>";


   /* Exercício 6 - Busca de Elemento:
    Crie um array contendo os dias da semana. Utilize a função array_search() para encontrar a posição do dia "Sábado" no array e exiba o resultado. */

    echo "Índice do dia 'Sábado' no array: " . array_search("Sábado", $dias_semana) . "<br>";

   /* Exercício 7 - Reversão de Array:
    Crie um array contendo os números de 1 a 10. Inverta a ordem dos elementos do array e exiba o resultado.*/

    $numeros= [1,2,3,4,5,6,7,8,9,10];
    $numeros_invertidos = array_reverse($numeros);
    print_r($numeros_invertidos);

  
?>


      

