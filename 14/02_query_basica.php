<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'usuario_contatos');
define('DB_PASSWORD', 'senha123');
define('DB_NAME', 'contatos');

// Conecta a aplicação ao banco de dados
$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Query para selecionar os contatos
$consulta = "SELECT * FROM contatos_info";

// Executa a query e armazena o resultado em uma variável
$result = $connection->query($consulta);

// Vendo os dados
while($row = $result->fetch_assoc()) {
    echo "Id: " . $row['id'] . "<br>";
    echo "Nome: " . $row['nome'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "<hr>";
}

// Exibe os resultados em tela
print_r($result);

// Fecha a conexão
$connection->close();

?>