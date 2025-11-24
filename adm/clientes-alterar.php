<?php

require_once "config.inc.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cliente = $_POST["cliente"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $id = $_POST["id"];

    $sql = "UPDATE clientes SET 
            cliente = '$cliente',
            cidade = '$cidade',
            estado = '$estado'
            WHERE id = '$id'";

    $executa = mysqli_query($conexao, $sql);
    if($executa) {
        echo "<h2>Alteração realizada com sucesso.</h2>";
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    }else{
        echo "<h2>Erro ao alterar cadastro.</h2>";
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    }
}else{
    echo "<h2>Acesso negado.</h2>";
    echo "<a href='?pg=clientes-admin'>Voltar</a>";
}



