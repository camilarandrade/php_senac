<?php
//// ESTRUTURAS CONDICIONAIS EM PHP

// Exemplo 1: IF-ELSE
$numero = 10;
if ($numero > 5) {
    echo "O número é maior que 5. <br>";
} else {
    echo "O número é menor ou igual a 5. <br>";
}

// Exemplo 2: IF-ELSEIF-ELSE
$hora = date("H");

if ($hora < "10") {
    echo "Bom dia! <br>";
} elseif ($hora < "19") {
    echo "Boa tarde! <br>";
} else {
    echo "Boa noite! <br>";
}

// Exemplo 3: Operador Ternário
$idade = 18;
$mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo "Mensagem: $mensagem <br>";

// Exemplo 4: SWITCH-CASE
$dia_semana = date("D");

switch ($dia_semana) {
    case "Mon":
        echo "Hoje é segunda-feira. <br>";
        break;
    case "Tue":
        echo "Hoje é terça-feira. <br>";
        break;
    case "Wed":
        echo "Hoje é quarta-feira. <br>";
        break;
    case "Thu":
        echo "Hoje é quinta-feira. <br>";
        break;
    case "Fri":
        echo "Hoje é sexta-feira. <br>";
        break;
    case "Sat":
        echo "Hoje é sábado. <br>";
        break;
    case "Sun":
        echo "Hoje é domingo. <br>";
        break;
    default:
        echo "Erro ao obter o dia da semana. <br>";
}
?>