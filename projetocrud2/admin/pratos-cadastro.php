<?php
include('config.inc.php'); // conexão com o banco
include('topo.php'); 
include('menu.php'); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO pratos (nome, descricao, preco, categoria) 
            VALUES ('$nome', '$descricao', '$preco', '$categoria')";

    if (mysqli_query($conexao, $sql)) {
        echo "<p> Prato cadastrado com sucesso!</p>";
        echo "<a href='../pratos.php'>Voltar à lista de pratos</a>";
        exit;
    } else {
        echo "<p>Erro ao cadastrar: " . mysqli_error($conexao) . "</p>";
    }
}
?>

<h2>Cadastrar Novo Prato</h2>
<form method="POST">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Descrição:</label><br>
    <textarea name="descricao"></textarea><br><br>

    <label>Preço:</label><br>
    <input type="number" step="0.01" name="preco" required><br><br>

    <label>Categoria:</label><br>
    <input type="text" name="categoria"><br><br>

    <input type="submit" value="Cadastrar Prato">
</form>
<?php include('rodape.php'); ?>

