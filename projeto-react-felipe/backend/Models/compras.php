  
<?php

require "Connection.php";

class ComprasUsuario
{
    public $idUsuarios;
    public $idprodutos;
    public $nome;
    public $sobrenome;
    public $cep;
    public $cpf;
    public $telefone;
    public $email;
  



    public static function getAll()
    {
        $conn =  Connection::getDB();

        $sql =  "SELECT p.categoria AS Categoria, p.imagem AS imagem,
         p.preco_venda as Total, u.nome as Nome,
          u.sobrenome as Sobrenome ,  u.email as Email
        FROM produtos AS p
        JOIN clientes AS u
        ON p.idproduto = u.idprodutos";
       
       $resp = $conn->query($sql);
       return $resp->fetchAll(PDO::FETCH_ASSOC);
    
        

    }

    public function registerUsuario(){
        $conn =  Connection::getDB();

        $sql = $conn->query("INSERT INTO clientes (idprodutos,
        nome,sobrenome,cpf,telefone,email)
        VALUES ('$this->nome', '$this->sobrenome','$this->cpf','$this->telefone','$this->email')");


    if ($sql -> rowCount() > 0 ) {
        return true;
    }else {
        return false;
    }


    }
}

?>