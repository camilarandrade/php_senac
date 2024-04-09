<?php
// Conexão Direta
$connection= new mysqli("localhost","root","","contatos");

//Verificando a conexão

if (!$connection->connect_errno) {
    echo "Sucesso na conexão <br>";
}

//Verificando a conexão
if ($connection->connect_errno) {
    echo "Erro de conexão <br>";
    echo "Erro:" .mysqli_connect_error();
}

?>