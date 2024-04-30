<?php
require_once 'database/PedidoRepository.php';

class PedidoController {
    public static function handleRequest($action) {
        switch($action) {
            case 'listar':
                self::listarPedidos();
                break;
            case 'buscar':
                self::buscarPedidoPorId();
                break;
            case 'cadastrar':
                self::cadastrarPedido();
                break;
            case 'atualizar':
                self::atualizarPedido();
                break;
            default:
                http_response_code(400); // Requisição inválida
                echo json_encode(['error' => 'Ação inválida']);
                break;
        }
    }

    public static function listarPedidos() {
        $pedidos = PedidoRepository::getAllPedidos();
        echo json_encode($pedidos);
    }

    public static function buscarPedidoPorId() {
        if($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $pedido = PedidoRepository::getPedidoById($id);

            if($pedido) {

            } else {
                http_response_code(404);
                echo json_encode(['error' => "Pedido não encontrado!"]);
            }
        } else {
            http_response_code(405);
            echo json_encode(['método não permitido' => 'Essa requisição só aceita GET']);
        }
    }

    public static function cadastrarPedido() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents("php://input"));
            $data_pedido = $data->data_pedido;
            $status = $data->status;

            $success = PedidoRepository::insertPedido(new Pedido(null, $data_pedido, $status));
            echo json_encode(['success' => $success]);
        } else {
            http_response_code(405);
        }
    }

    public static function atualizarPedido() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents("php://input"));
            $id = $data->id;
            $status = $data->status;
            $data_pedido = $data->data_pedido;

            // Existindo um pedido!
            $pedidoExistente = PedidoRepository::getPedidoById($id);
            if($pedidoExistente) {
                //update das propriedades do pedido
                $pedidoExistente->setStatus($status);
                $pedidoExistente->setData($data_pedido);

                $success = PedidoRepository::updatePedido($pedidoExistente, $id);
                echo json_encode(['success' => $success]);
            } else {
                http_response_code(404);
                echo json_encode(['error' => 'Pedido não encontrado']);
            }
        } else {
            http_response_code(405);
        }
        
    }
}
?>