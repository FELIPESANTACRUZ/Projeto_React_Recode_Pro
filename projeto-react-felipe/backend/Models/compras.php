  
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

        $sql =  "SELECT p.categoria , p.imagem ,
         p.preco_venda , u.nome ,
          u.sobrenome ,  u.email 
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
        VALUES ('$this->idprodutos','$this->nome', '$this->sobrenome','$this->cpf', '$this->cep','$this->telefone','$this->email')");


    if ($sql == true ) {
        return true;
    }else {
        return false;
    }


    }
}

?>