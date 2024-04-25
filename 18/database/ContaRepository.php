<?php
require_once 'DatabaseRepository.php';

class ContaRepository {

    public static function getAllContas() {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM conta");

        $contas = [];
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $contas[] = $row;
            }
        }
        $connection->close();
        return $contas;
    }

    public static function getContaById($id) {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM conta WHERE id= $id");

        $conta = null;

        if($result->num_rows > 0) {
            $conta = $result->fetch_assoc();
        }

        $connection->close();
        return $conta;
    }

    public static function insertConta($cliente_id, $numero, $saldo, $tipo, $limite_cheque_especial, $taxa_rendimento) {
        $connection = DatabaseRepository::connect();
        $sql = "INSERT INTO conta (cliente_id, numero, saldo, tipo, limite_cheque_especial,	taxa_rendimento)
                VALUES ($cliente_id, $numero, $saldo, '$tipo', '$limite_cheque_especial', '$taxa_rendimento')";
        $success = $connection->query($sql);
        $connection->close();
        return $success;
    }

    public static function updateConta($id_conta, $saldo, $limite_cheque_especial, $taxa_rendimento) {
        $connection = DatabaseRepository::connect();
        $sql = "UPDATE conta SET saldo=$saldo, limite_cheque_especial='$limite_cheque_especial', taxa_rendimento ='$taxa_rendimento'
                WHERE id=$id_conta";
        $success = $connection->query($sql);
        $connection->close();
        return $success;
    }

    public static function deleteConta($id) {
        $connection = DatabaseRepository::connect();
        $success = $connection->query("DELETE FROM conta WHERE id=$id");
        $connection->close();
        return $success;
    }
}   
?>