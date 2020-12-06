<?php

// require "./connection.php";
header("Access-Control-Allow-Origin:*");    // Permite que outras aplicações acessem a API
header("Content-type: application/json");   //Indicação de arquivo JSON 

require "./Models/compras.php";


header("Access-Control-Allow-Origin:*");    // Permite que outras aplicações acessem a API
header("Content-type: application/json");   //Indicação de arquivo JSON 

$compras = ComprasUsuario::getAll();


echo json_encode($compras);

?>