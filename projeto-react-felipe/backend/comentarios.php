
<?php




require "./Models/contatos.php";




$comentarios = new Comentarios;

$comentarios -> nome = $_POST['nome'];
$comentarios -> msg = $_POST['msg'];
// $comentarios -> data = $_POST['data']

$validate = $comentarios -> registerComentarios();


if ($validate == true) {
    echo json_encode(true);
} else {
    echo json_encode(false);
}



// echo json_encode($comentarios);



















?>