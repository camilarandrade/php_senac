<?php

require_once 'database/PedidoRepository.php'; 

class PedidoController {
    public static function handleRequest($action){
        switch ($action){
            case 'listar':
                self::listarPedidos();
                break;
            case 'buscar':
                self::buscarPedidoPorID();
                break;
            case 'cadastrar':
                self::cadastrarPedido();
                break;
            case 'atualizar':
                self::atualizarPedido();
                break;
            case 'excluir':
                self::excluirPedido();
                break;
            default:
                http_response_code(400);
                echo json_encode(['error' => 'Ação inválida!']);
                break;
        }
    }


    public static function listarPedidos(){
        $pedidos= PedidoRepository::getAllPedidos();
        echo json_encode($pedidos);
    }

    public static function buscarPedidoPorID() {
        if($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $pedido = PedidoRepository::buscarPedidoPorID($id);

            if($pedido) {
                echo json_encode($pedido);
            } else {
                http_response_code(404);
                echo json_encode(['error' => 'Produto não econtrado']);
            }
        } else {
            http_response_code(405); 
        }
    }

    public static function cadastrarPedido() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents("php://input"));
            $pedido = new Pedido(null, $data->nome, $data->descricao, $data->preco);

            $success = PedidoRepository::insertPedido($pedido);
            echo json_encode(['success' => $success]);
        } else {
            http_response_code(405);
        }
    }

    public static function atualizarPedido() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents("php://input"));
            $pedido = new Pedido($data->id, $data->nome, $data->descricao, $data->preco);

            $success = PedidoRepository::updatePedido($pedido);
            echo json_encode(['success' => $success]);
        } else {
            http_response_code(405);
        }
    }

    public static function excluirPedido() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents("php://input"));
            $id = $data->id;
    
            $success = PedidoRepository::deletePedido($id);
            echo json_encode(['success' => $success]);
        } else {
            http_response_code(405);
        }
    }
}

?>