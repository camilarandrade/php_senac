<?php
    echo "Olá Mundo! <BR>";

    //Isso é um comentário
    
    # Isso também é um comentário

    /*
    Isso é um comentário de múltiplas linhas
    Eu disse, múltiplas linhas
    */

    //Decração de variáveis
    $nome = "João";
    $sobrenome = "Silva";
    $nome_completo = $nome ." ". $sobrenome;

    //echo $nome;
    //echo $sobrenome;
    echo $nome." ".$sobrenome ."<br>";
    echo $nome_completo . "<br>";

    //Variáveis numéricas
    $idade = 25;
    $ano = 2024;

    echo $idade . "<br>";
    echo $ano - $idade . "<br>"; //operações matemáticas

    echo 'Esse é um texto em aspas simples <br>';
    echo "Esse é um texto em aspas duplas <br>";

    //Trabalhando com aspas simples e duplas
    echo 'Dom Pedro disse: "Independencia ou Morte!" <br>';

    echo "$nome tem $idade anos de idade <br>";
    echo '$nome tem $idade anos de idade';

    //Testando o case sensitive - palavras reservadas
    echo "Texto 1 <br>";
    ECHO "Texto 2 <br>";

    //Testando o case sensitive = variáveis

    $primeiroNome= "Carlos";

    echo $primeiroNome;
    ECHO $PRIMEIRONOME;
?>