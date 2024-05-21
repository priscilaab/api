<?php
require_once('../classes/Usuario.class.php');
header('Content-Type: application/json');

$u = new Usuario();
if(isset($_GET['id'])){
    $u->id = $_GET['id'];
    $resultado = $u->ListarPorId();
   echo json_encode($resultado); 
}else{
    //Retornar erro em JSON:
    http_response_code(400);
    echo json_encode(["error"=>"ERRO: Necessário setar ID."]);
}


?>