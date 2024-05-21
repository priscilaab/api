<?php 
require_once('Banco.class.php');

class Produto{
    public $id;
    public $nome;
    public $fabricante;
    public $estoque;
    public $cod_barras;
    public $preco;

    public function Listar(){
        $banco = Banco::conectar();
        $sql = "SELECT * FROM produtos";
        $comando = $banco->prepare($sql);
        $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
    public function ListarPorId(){
        $banco = Banco::conectar();
        $sql = "SELECT * FROM produtos WHERE id=?";
        $comando = $banco->prepare($sql);
        $comando->execute([$this->id]);
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
}

?>