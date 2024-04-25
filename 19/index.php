<?php
require_once 'database/PedidoRepository.php';
require_once 'database/ProdutoRepository.php';

$action = $_GET['action'];

switch($action) {
    case 'listar':
        echo json_encode(PedidoRepository::getAllPedidos());
        break;
    case 'listarProdutos':
        echo json_encode(ProdutoRepository::getAllProdutos());
        break;
    default:
        break;
}

?>