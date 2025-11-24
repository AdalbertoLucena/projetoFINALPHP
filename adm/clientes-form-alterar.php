<?php
    require_once "config.inc.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        $cliente = mysqli_fetch_array($resultado);


?>

<h2>Cadastro de Clientes</h2>
<form action="?pg=clientes-alterar" method="post">
    <input type="hidden" name="id" value="<?=$cliente['id']?>">
    <label>Nome:</label>
    <input type="text" name="cliente" value="<?=$cliente['cliente']?>"><br>
    <label>Cidade:</label>
    <input type="text" name="cidade" value="<?=$cliente['cidade']?>"><br>
    <label>Estado:</label>
    <input type="text" name="estado" value="<?=$cliente['estado']?>"><br>

    <input type="submit" value="Alterar cliente">
</form>

<?php
    }else{
        echo "<h2>Nenhum cliente cadastrado!</h2>";
    }
?>