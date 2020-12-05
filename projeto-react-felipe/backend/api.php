  
<!DOCTYPE html>

<html lang="pt-br">

<head charset="UTF-8">
<meta name="viewport" content="width"=device-width,initial-scale=1.0">
<title>Teste API</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
 integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>




<form method="GET" >
<input type="text" name="cep" placeholder="Digite o CEP">
<input type="submit" value="Enviar">
</form>

<?php

echo '<br><pre>';
if ($_GET && isset($_GET)){
    if($_GET['cep']){
        $cep = $_GET['cep'];
        $jsonviacep = file_get_contents("https://viacep.com.br/ws/{$cep}/json/");

        $arraycep = json_decode($jsonviacep,true);
        foreach($arraycep as $k=>$v){
            echo $k.': '.$v.'<br>'; 
        }
        echo '<h2> Longadouro: </h2><h4> ' .$arraycep['logradouro'].'</h4>';
        echo '<h2> Bairro: </h2><h4>'.$arraycep['bairro'].'<h4>';
        echo '<h2> Município: </h2><H4>'.$arraycep['localidade'].'</h4>';
        echo '<h2> Estado: </h2><h4>'.$arraycep['uf'].'</h4>';
        echo '<h2> DDD: <h2><h4>'.$arraycep['ddd'].'<h4>';
        echo '<h2> CEP: </h2><h4>'.$arraycep['cep'].'</h4><br />';
        }else {
            '<h2> CEP NÃO ENCONTRADO,FAVOR DIGITAR CORRETAMENTE</H2>';
        }
}

?>