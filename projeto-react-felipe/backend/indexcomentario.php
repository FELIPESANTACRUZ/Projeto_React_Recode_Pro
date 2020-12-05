<?php

// require "./connection.php";

require "./Models/contatos.php";


header("Access-Control-Allow-Origin:*");    // Permite que outras aplicações acessem a API
header("Content-type: application/json");   //Indicação de arquivo JSON 

$comentarios = Comentarios::getAll();


echo json_encode($comentarios);

?>