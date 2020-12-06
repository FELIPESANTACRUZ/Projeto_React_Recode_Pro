  
<?php

require "Connection.php";

class Produtos
{
    public $id_produto;
    public $categoria;
    public $imagem;
    public $descricao;
    public $preco;
    public $preco_venda;

    public static function getAll()
    {
        $connection =  Connection::getDb();

        
        
        $stmt = $connection -> query("SELECT * FROM produtos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

// public function registercompras () {

//     $connection = Connection::getDb();

//     $stmt = $connection ->query("INSERT INTO compras (id_quantidade,(id_produto) values ('$this->quantidade','$this->produto')");

//     return $stmt->rowCount();
// }