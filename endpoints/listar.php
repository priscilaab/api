<?php
require_once('../classes/Produto.class.php');
header('Content-Type: application/json');

$p = new Produto();
if(isset($_GET['id'])){
    $p->id = $_GET['id'];
    $resultado = $p->ListarPorId();
}else{
$resultado = $p->Listar();
}

echo json_encode($resultado);
?>