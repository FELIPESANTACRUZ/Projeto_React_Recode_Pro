<?php

require "./Models/compras.php";



$compras = new ComprasUsuario;

$idproduto -> idprodutos = $_POST['idprodutos'];
$idcliente -> idUsuarios = $_POST['idUsuarios'];
$nome -> nome = $_POST['nome'];
$sobrenome -> sobrenome = $_POST['sobrenome'];
$cpf -> cpf = $_POST['cpf'];
$cep -> cep = $_POST['cep'];
$telefone -> telefone = $_POST['telefone'];
$email -> email = $_POST['email'];


// $comentarios -> data = $_POST['data']

$validate = $compras -> registerUsuario();


if ($validate == true) {
    echo json_encode(true);
} else {
    echo json_encode(false);
}


?>






