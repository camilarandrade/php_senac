<?php
//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO


// Desafio 1: Contagem Regressiva
/*
    Crie um programa que solicite ao usuário um número inteiro positivo N e realize uma contagem regressiva até zero.
    Após cada contagem, exiba a mensagem "Falta X segundos" onde X representa o número de segundos restantes para chegar a zero.
*/
$numero = 5; //Número fornecido pelo usuário.
echo "Contagem Regressiva <br>";

// Solução com for
for ($i = $numero; $i >= 0; $i--) {
    echo "Faltam $i segundos <br>";
}

// Solução com while
$i = $numero;
while ($i >= 0) {
    echo "Faltam $i segundos <br>";
    $i--;
}

// Solução com do-while
$i = $numero;
do {
    echo "Faltam $i segundos <br>";
    $i--;
} while ($i >= 0);
echo "<br>";
// Desafio 2: Tabuada
/*
    Crie um programa que exiba a tabuada de multiplicação de um número fornecido pelo usuário.
    A tabuada deve ser exibida de 1 até 10.
*/

$tabuada_numero = 8;

// Solução com o FOR
for ($i = 1; $i <= 10; $i++) {
    $resultado = $tabuada_numero * $i;
    echo "$tabuada_numero X $i = $resultado <br>";
}
echo "<br>";

// Solução com while
$i = 1;
while ($i <= 10) {
    $resultado = $tabuada_numero * $i;
    echo "$tabuada_numero X $i = $resultado <br>";
    $i++;
}
echo "<br>";

// Desafio 3: Sequência Fibonacci
/*
    A sequência de Fibonacci é uma sequência de números inteiros em que cada termo é a soma dos dois anteriores.
    Crie um programa que solicite ao usuário um número N e exiba os N primeiros termos da sequência de Fibonacci.
*/

// Solução com for
echo "Solução com o FOR: <br>";

$anterior = 0;
$atual = 1;
$termos = 13;

echo "$anterior $atual ";
for ($i = 2; $i < $termos; $i++) {
    $proximo = $anterior + $atual;
    echo "$proximo ";
    $anterior = $atual;
    $atual = $proximo;
}
echo "<br>";

// Solução com while
echo "Solução com o WHILE: <br>";
$i = 2;
$anterior = 0;
$atual = 1;

echo "$anterior $atual ";
while ($i < $termos) {
    $proximo = $anterior + $atual;
    echo "$proximo ";
    $anterior = $atual;
    $atual = $proximo;
    $i++;
}
echo "<br>";
//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO

// Desafio 1: Verificar se a soma de A + B é igual a C
/*
    Solicita três números inteiros ao usuário (A, B e C) e verifica se a soma de A e B é igual a C.
*/
// Implementação da Verificação de Soma

$numeroA= 2;
$numeroB= 3;
$numeroC= 5;

if ($numeroA + $numeroB== $numeroC){
    echo "A soma de $numeroA + $numeroB é igual a $numeroC";
} else {
    echo "A soma de $numeroA + $numeroB não é igual a $numeroC";
}





// Desafio 2: Calcular o quadrado de um número
/*
    Solicita ao usuário um número inteiro e calcula o quadrado desse número.
*/

// Implementação do Cálculo do Quadrado



// Desafio 3: Verificar se um número é par ou ímpar
/*
    Solicita ao usuário um número inteiro e verifica se ele é par ou ímpar.
*/

// Implementação da Verificação de Paridade



// Desafio 4: Calcular a média de três números
/*
    Solicita ao usuário três números e calcula a média aritmética entre eles.
*/

// Implementação do Cálculo da Média




// Desafio 5: Verificar se um número é múltiplo de outro
/*
    Solicita ao usuário dois números e verifica se o primeiro é múltiplo do segundo.
*/

// Implementação da Verificação de Múltiplo




//// Exercício 2: Números Primos em um Intervalo
/*
    Solicita dois números inteiros ao usuário (N e M, onde N < M) e exibe todos os números primos no intervalo de N a M.
*/

// Implementação de Números Primos em um Intervalo





//// Exercício 3: Conversão de Horas em Minutos
/*
    Solicita ao usuário a quantidade de horas e minutos e converte isso para o equivalente total de minutos.
*/

// Implementação de Conversão de Horas em Minutos




/// Exercício 4: Desenho de Pirâmide
/*
    Solicita ao usuário a altura de uma pirâmide (número de linhas) e desenha-a na tela usando asteriscos (*) em cada linha.
*/

// Implementação de Desenho de Pirâmide






//// Exercício 6: Contagem de Dígitos em um Número
/*
    Solicita ao usuário um número inteiro positivo e conta quantos dígitos esse número possui.
*/

// Implementação de Contagem de Dígitos em um Número




//// Exercício 7: Verificação de Palíndromo
/*
    Solicita ao usuário uma palavra e verifica se ela é um palíndromo.
*/

// Implementação de Verificação de Palíndromo




//// Exercício 8: Ordenação de Números
/*
    Solicita ao usuário três números inteiros e os exibe em ordem crescente.
*/

// Implementação de Ordenação de Números





//// Exercício 9: Soma de Dígitos
/*
    Solicita ao usuário um número inteiro positivo e calcula a soma de todos os seus dígitos.
*/

// Implementação de Soma de Dígitos




//// Exercício 10: Geração de Sequência Numérica
/*
    Solicita ao usuário um número inteiro N e exibe os primeiros N números da sequência: 1, 3, 6, 10, 15, 21, ...
*/
// Implementação de Geração de Sequência Numérica
