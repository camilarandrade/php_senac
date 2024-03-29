<?php
//// INTRODUÇÃO A ARRAYS EM PHP

// Definição de Arrays
$frutas = array("Maçã", "Banana", "Laranja", "Morango");
$numeros = [1, 2, 3, 4, 5];
$alunos = array("João" => 18, "Maria" => 20, "Pedro" => 19);

// Acessando Elementos do Array
echo "A segunda frunta é: " . $frutas[1] . "<br>";
echo "O terceiro número é: " . $numeros[2] . "<br>";
echo "A idade de João é: " . $alunos["João"] . " anos. <br>";

// Alterar Elementos do Array
$frutas[0] = "Pera";
$numeros[4] = 10;
$alunos["Maria"] = 21;

// Adicionando Elemntos ao Array
$frutas[] = "Abacaxi";
$numeros[] = 6;
$alunos ["Ana"] = 22;

// Percorrendo um Array com o foreach

echo "Lista de Frutas: ";
foreach ($frutas as $fruta){
    echo $fruta . " ";
}
echo "<br>"; 

echo "Lista de números: ";
foreach ($numeros as $numero){
    echo $numero . " ";
}
echo "<br>"; 

echo "Lista de alunos: ";
foreach($alunos as $nome => $idade){
    echo $nome . " tem " . $idade . " anos. ";
    echo "<br>";
}

// Funções Úteis para Arrays

// Funções Úteis para Arrays
echo "Número de elementos no array de frutas: " . count($frutas) . "<br>";
echo "Índice da fruta 'Laranja' no array: " . array_search("Laranja", $frutas) . "<br>";
echo "Última fruta do array: " . end($frutas) . "<br>";
echo "Array de frutas antes de reverter: ";
print_r($frutas);
echo "<br>";
echo "Array de frutas depois de reverter: ";
$frutas_revertidas = array_reverse($frutas);
print_r($frutas_revertidas);

?>