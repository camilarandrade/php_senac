<?php

require_once 'database/PedidoRepository.php';

print_r (PedidoRepository::getAllPedidos());

$action= $_GET['action'];

switch($action){
    case 'listar': 
        echo json_encode(PedidoRepository::getAllPedidos());
        break;
        default:
        break; 

}

?>