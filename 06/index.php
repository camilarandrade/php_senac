<?php
//// VERIFICAÇÃO DE TIPOS DE DADOS E PALAVRAS RESERVADAS

// Verificação de Tipo de Dados
$numero = 10;
$string = "Olá, mundo!";
$booleano = true;
$array = [1, 2, 3];

echo 'Tipo de dado da variável $numero : ' . gettype($numero) . "<br>";
echo 'Tipo de dado da variável $string: ' . gettype($string) . "<br>";
echo 'Tipo de dado da variável $booleano: ' . gettype($booleano) . "<br>";
echo 'Tipo de dado da variável $array: ' . gettype($array) . "<br>";

// Verificação de Tipo de Dados com Funções
echo 'Verificação se $numero é do tipo int : ' . (is_int($numero)? "Sim" : "Não") . "<br>";
echo 'Verificação se $string é do tipo string: ' . (is_string($string)? "Sim" : "Não") . "<br>";
echo 'Verificação se $booleano é do tipo boolean: ' . (is_bool($booleano)? "Sim" : "Não") . "<br>";
echo 'Verificação se $array é do tipo array: ' . (is_array($array)? "Sim" : "Não") . "<br>";

// Conversão de Tipos de Dados
$numero_string = "456";
$numero_convertido = (int)$numero_string;

echo "Número convertida de string para int: $numero_convertido <br>";

// Demais conversões:
$numero = 456;
$string_numero = (string)$numero;

$bool_string = "true";
$bool_convertido = (bool)$bool_string;

$array_string = "5,2,9";
$array_convertido = explode(",", $array_string);

echo "Números em uma string antes da conversão : $array_string <br>";
echo "Array convertido de string para array: ";
print_r($array_convertido);
echo "<br>";

# exemplo adicional 1 - conversão para array
$hora = "20:02:56"; //hora lida de um log
$array_hora_minuto = explode(":", $hora);
echo "O evento ocorreu às $array_hora_minuto[0] horas, $array_hora_minuto[1] minutos, $array_hora_minuto[2] segundos.";
echo "<br>";

# exemplo adicional 2 - conversão para array
$contatos = "Aecio-Nerildo-JS-Celso-Luana";
echo "A lista de contatos é: $contatos <br>";

$contatos_array = explode("-", $contatos);
print_r($contatos_array);
echo "<br>";

// Palavras Reservadas e Funções Comuns
echo "Exemplo de uso da função strtoupper para converter uma string em maiúsculas: " . strtoupper($contatos) . "<br>";

echo "Exemplo de uso da palavra reservada require para incluir um arquivo: ";
//require 'arquivo.php'; // Comentar para não exibir erro;
echo "<br>";

echo "Exemplo de uso de palavra reservada private para definir um método privado em uma classe: ";
class MinhaClasse {
    private $atributo;

    private function metodoPrivado() {
        // Implementação do método
    }
}

echo "Exemplo de uso da constante mágica __DIR__ para obetr o diretório atual: " . __DIR__ . "<br>";
echo "Exemplo de uso da constante mágica __FILE__ para obter o caminho completo do arquivo atual: " . __FILE__ . "<br>";

?>