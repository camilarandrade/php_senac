<?php

//Exercício 1 - Concatenação de Strings: Crie duas variáveis contendo o nome e a profissão de uma pessoa. Em seguida, concatene as duas variáveis para formar uma frase que descreva a pessoa. Por exemplo, se o nome for "Ana" e a profissão for "engenheira", a frase resultante será "Ana é engenheira".

$nome = "Camila";
$profissao = "Programador";
echo $nome . " é " . $profissao;
echo "<br>";

// Exercício 2 - Comprimento de uma String: Crie uma variável contendo uma senha. Em seguida, verifique se a senha tem pelo menos 8 caracteres de comprimento. Se tiver, exiba uma mensagem indicando que a senha é válida; caso contrário, exiba uma mensagem de erro.

$senha = "Minhasenha123";
echo strlen($senha);
echo "<br>";

if (strlen($senha) > 8) {
    echo "A senha é válida!";
    echo "<br>";
} else {
    echo "A senha está inválida, digite no mínimo 8 caracteres";
    echo "<br>";
}


//Exercício 3 - Substituição de Caracteres:Crie uma variável contendo uma frase. Substitua todas as ocorrências da palavra "cachorro" por "gato" na frase e exiba o resultado.

$texto = "Eu amo cachorro, gosto de fazer carinho em cachorro e amo ir na casa de amigo que tem cachorro";
echo $texto;
echo "<br>";
$novo_texto = str_replace("cachorro", "gato", $texto);
echo $novo_texto; //Saída? O gato roeu a roupa do rei.
echo "<br>";

// Exercício 4 - Conversão de Case: Crie uma variável contendo uma palavra. Converta a palavra para letras minúsculas e depois para letras maiúsculas. Exiba ambas as versões da palavra.

$texto= "Dayane";
$texto_minusculo= strtolower($texto); 
$texto_maiusculo= strtoupper($texto); 
echo $texto_minusculo;
echo "<br>"; 
echo $texto_maiusculo;
echo "<br>"; 
echo $texto;
echo "<br>";

// Exercício 5 - Remoção de Espaços em Branco: Crie uma variável contendo uma URL. Remova todos os espaços em branco no início e no final da URL e exiba o resultado.

$texto = "  https://www.sp.senac.br/  ";
$texto_sem_espacos = trim($texto);
echo $texto_sem_espacos; 
echo "<br>";

// Exercício 6 - Posição da Primeira Ocorrência: Crie uma variável contendo uma lista de compras. Use a função strpos() para encontrar a posição da primeira ocorrência do item "leite" na lista de compras e exiba a posição encontrada.

 $listacompras = "1.Feijao 2.Arroz 3.Leite 4.Café ";
 $posicao = strpos($listacompras, "3.Leite"); 
 echo $posicao;
 echo "<br>";

//Exercício 7 - Inversão de uma String: Crie uma variável contendo uma palavra. Inverta a palavra e exiba o resultado.

$texto = "Camila";
$texto_invertido = strrev($texto);
echo $texto_invertido;