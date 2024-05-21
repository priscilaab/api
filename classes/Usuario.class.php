<?php 
require_once('Banco.class.php');

class Usuario{
public $id;
public $nome;
public $email;
public $senha;
public $token;

 public function ListarPorId(){
    $banco = Banco::conectar();
    $sql = "SELECT * FROM usuarios WHERE id=?";
    $comando = $banco->prepare($sql);
    $comando->execute([$this->id]);
    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
    Banco::desconectar();
    return $resultado;
} 
}
?>