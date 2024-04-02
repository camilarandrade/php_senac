<?php

function nomeDaFuncao() {
    // Bloco de código da função
}

// Declaração de função sem parâmetros e sem retorno
function saudacao() {
    echo "Olá, TII04! <br>";
}

saudacao(); // Chamada da função

// Declaração de uma função que retorna um valor
function saudacao_retorno() {
    return "Olá, TII04% <br>";
}

echo saudacao_retorno(); // Chamada de função com retorno

// Declaração de uma função que recebe parâmetro
function saudacao_parametro($nome) {
    echo "Olá, $nome& <br>";
}

saudacao_parametro("TII04"); // Chamada de função com retorno

// Declaração de uma função que recebe um parâmetro e retorna algo
function saudacao_parametro_retorno($nome) {
    return "Olá, $nome* <br>";
}

echo saudacao_parametro_retorno("TII04");

// Declaração de uma função que recebe dois parametros e realiza um retorno
function soma($a, $b) {
    return $a + $b;
}

echo "A soma de  8 com 16 é: " . soma(8, 16) . "<br>";

# ESCOPO DAS VARIÁVEIS!!!

$mensagem = "Olá"; // Variável global

function mostrarMensagem() {
    $mensagem = "Mundo"; // Variável local
    echo $mensagem; // Saída: Mundo
}

mostrarMensagem();
echo $mensagem; // Saída: Olá
?>