<?php

require_once 'DatabaseRepository.php';
require_once 'model/Pedido.php';

class PedidoRepository {
    public static function getAllPedidos(){
        $connection= DatabaseRepository::connect();
        $result= $connection->query("SELECT*FROM pedido");

        $pedidos= [];
        if($result->num_rows>0){
            while($row= $result->fetch_assoc()){
                $pedido= new Pedido($row['id'], $row ['data_pedido'], $row ['status']);
                $pedidos[]= $pedido; 
            }
        }

        $connection->close();
        return $pedidos;  

    }}

    public static function getPedidoById($id) {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM pedido WHERE id = $id");

        $pedido = null;
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $pedido = new Pedido($row['id'], $row['data_pedido'], $row['status']);
        }
        $connection->close();
        return $pedido;
    }

    public static function insertPedido(Pedido $pedido) {
        $connection = DatabaseRepository::connect();

        $nome = $pedido->getNome();
        $descricao = $pedido->getDescricao();
        $preco = $pedido->getPreco();

        $sql = "INSERT INTO pedido (id, data_pedido, status) VALUES ('$nome', '$descricao', '$preco')";
        $success = $connection->query($sql);
        $connection->close();
        return $success;
    }

    public static function updatePedido(Pedido $pedido) {
        $connection = DatabaseRepository::connect();
        $id = $pedido->getId();
        $nome = $pedido->getNome();
        $descricao = $pedido->getDescricao();
        $preco = $pedido->getPreco();

        $sql = "UPDATE pedido SET nome='$nome', descricao='$descricao', preco='$preco'
                WHERE id=$id";
        $success = $connection->query($sql);
        $connection->close();

        return $success;
}

?>