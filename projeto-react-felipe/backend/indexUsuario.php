<?php

// require "./connection.php";

require "./Models/compras.php";


header("Access-Control-Allow-Origin:*");    // Permite que outras aplicações acessem a API
header("Content-type: application/json");   //Indicação de arquivo JSON 

$compras = ComprasUsuario::getAll();


echo json_encode($compras);

?>