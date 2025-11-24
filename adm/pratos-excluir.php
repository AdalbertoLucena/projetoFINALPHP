<?php
include('config.inc.php'); // mesma conexão
include('topo.php'); 
include('menu.php'); 


if (!isset($_GET['id'])) {
    die("<p> Nenhum ID informado.</p>");
}

$id = $_GET['id'];

$sql = "DELETE FROM pratos WHERE id = $id";

if (mysqli_query($conexao, $sql)) {
    echo "<p> Prato excluído com sucesso!</p>";
    echo "<a href='pratos.php'>Voltar à lista</a>";
} else {
    echo "<p> Erro ao excluir: " . mysqli_error($conexao) . "</p>";
}
include('rodape.php'); 

?>
