<?php

    require_once "config.inc.php";

    echo "<a href='?pg=clientes-form'>Cadastrar cliente</a>";

    echo "<h1>Lista de clientes</h1>";

    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "ID: ".$dados['id']."<br>";
            echo "Nome: ".$dados['cliente']."<br>";
            echo "Cidade: ".$dados['cidade']."<br>";
            echo "Estado: ".$dados['estado']."<br>";
            echo " <a href='?pg=clientes-form-alterar&id=$dados[id]'>Editar</a>";
            echo "| <a href='?pg=clientes-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "<h3>Nenhum cliente cadastrado!</h3>";
    }


