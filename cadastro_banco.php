<?php

$server = "localhost";
$bancodedados = "clientes";
$usuario = "root";
$senha = "";

$conn = mysqli_connect($server, $usuario, $senha, $bancodedados);

if (!$conn) {
    echo "Erro na conexão com o banco!";
    exit;
}

function mensagem($texto, $tipo) {
    echo "<div class='alert alert-$tipo' role='alert'>
           $texto       
        </div>";
}

function mover_foto($vetor_foto) {

    
    if ($vetor_foto['error'] != 0 || $vetor_foto['size'] == 0) {
        return null;
    }

    
    $tipoCompleto = $vetor_foto['type']; // ex: image/jpeg
    $partes = explode("/", $tipoCompleto);

    if ($partes[0] != "image") {
        return null;
    }

   
    $nome_arquivo = date('YmdHis') . "_" . rand(1000, 9999) . ".jpg";

    
    if (!is_dir("img")) {
        mkdir("img", 0777, true);
    }

    
    if (move_uploaded_file($vetor_foto['tmp_name'], "img/" . $nome_arquivo)) {
        return $nome_arquivo;
    }

    return null;
}
?>
