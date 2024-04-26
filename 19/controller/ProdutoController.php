<?php

require_once 'database/ProdutoRepository.php';

class ProdutoController {
    public static function handleRequest($action) {
        switch ($action) {
            case 'listar':
                $produtos = ProdutoRepository::getAllProdutos();
                echo json_encode($produtos);
                break;
            default:
                http_response_code(400);
                echo json_encode(['error' => 'Ação inválida!']);
                break;
        }
    }
}
?>