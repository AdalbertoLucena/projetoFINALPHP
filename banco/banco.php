<?php

$server = "localhost";
$bancodedados = "clientes";
$usuario = "root";
$senha = "";

if ( $conn = mysqli_connect($server, $usuario, $senha, $bancodedados) ) {
    // echo "Conectado";
} else 
   echo "Erro";

function mensagem($texto, $tipo) {
    echo "<div class='alert alert-$tipo' role='alert'>
           $texto       
        </div>";
}
?>