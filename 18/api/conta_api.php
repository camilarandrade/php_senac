<?php
require_once '../database/ContaRepository.php';

$action = $_GET['action'];

switch($action) {
    case 'listar':
        listarContas();
        break;
    case 'buscar':
        buscarContaById();
        break;
    case 'cadastrar':
        cadastrarConta();
        break;
    case 'atualizar':
        atualizarConta();
        break;
    case 'excluir': {
        excluirConta();
        break;
    }
    default:
        http_response_code(400); // Requisição inválida
        echo json_encode(['error' => 'Ação inválida']);
}

function listarContas() {
    $contas = ContaRepository::getAllContas();
    echo json_encode($contas);
}

function buscarContaById() {
    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];
        $conta = ContaRepository::getContaById($id);

        if($conta) {
            echo json_encode($conta);
        } else {
            http_response_code(404); // Conta não encontrada
            echo json_encode(['error' => 'Conta não encontrada']);
        }
    } else {
        http_response_code(405); // Método não permitido
    }
}

// (cliente_id, numero, saldo, tipo, limite_cheque_especial, taxa_rendimento)
// (1, 1001, 1500.00, 'corrente', 500.00, NULL)
function cadastrarConta() {
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents("php://input"));
        
        $success = ContaRepository::insertConta($data->cliente_id, 
                                    $data->numero, 
                                    $data->saldo, 
                                    $data->tipo, 
                                    $data->limite_cheque_especial, 
                                    $data->taxa_rendimento);

        echo json_encode(['success' => $success]);
    } else {
        http_response_code(405); // Método não permitido
    }
}

function atualizarConta() {
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents("php://input"));
        
        $success = ContaRepository::updateConta($data->conta_id,                                     
                                    $data->saldo,                                     
                                    $data->limite_cheque_especial, 
                                    $data->taxa_rendimento);

        echo json_encode(['success' => $success]);
    } else {
        http_response_code(405); // Método não permitido
    }
}

function excluirConta() {
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;

        $success = ContaRepository::deleteConta($id);
        echo json_encode(['success' => $success]);
    } else {
        http_response_code(405); // Método não permitido
    }
}

?>