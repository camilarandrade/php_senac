<?php
require_once 'DatabaseRepository.php';

class ClienteRepository {
    
    public static function getAllClientes() {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM cliente");
        
        $clientes = [];
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $clientes[] = $row;
            }
        }

        $connection->close();
        return $clientes;
    }
}
?>