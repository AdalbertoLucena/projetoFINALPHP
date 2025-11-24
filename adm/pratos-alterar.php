<?php
// Conexão com o banco
include('config.inc.php');
include('topo.php'); 
include('menu.php'); 


// volta uma pasta para achar o arquivo conexao.php

// Verifica se o ID foi passado
if (!isset($_GET['id'])) {
    die("<p> Nenhum ID informado.</p>");
}

$id = $_GET['id'];

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];

    // Atualiza no banco
    $sql = "UPDATE pratos 
            SET nome = '$nome', descricao = '$descricao', preco = '$preco', categoria = '$categoria' 
            WHERE id = $id";

    if (mysqli_query($conexao, $sql)) {
        echo "<p> Prato alterado com sucesso!</p>";
        echo "<a href='../PRATOS.PHP'>Voltar à lista</a>";
        exit;
    } else {
        echo "<p> Erro ao atualizar: " . mysqli_error($conexao) . "</p>";
    }
}

// Buscar dados atuais do prato
$sql = "SELECT * FROM pratos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
$prato = mysqli_fetch_assoc($resultado);

if (!$prato) {
    die("<p> Prato não encontrado.</p>");
}
?>

<h2>Alterar Prato</h2>

<form method="POST">
    <label>Nome:</label><br>
    <input type="text" name="nome" value="<?= htmlspecialchars($prato['nome']) ?>" required><br><br>

    <label>Descrição:</label><br>
    <textarea name="descricao" required><?= htmlspecialchars($prato['descricao']) ?></textarea><br><br>

    <label>Preço:</label><br>
    <input type="number" step="0.01" name="preco" value="<?= htmlspecialchars($prato['preco']) ?>" required><br><br>

    <label>Categoria:</label><br>
    <input type="text" name="categoria" value="<?= htmlspecialchars($prato['categoria']) ?>"><br><br>

    <input type="submit" value="Salvar Alterações">
</form>

<br>
<a href="../PRATOS.PHP">Voltar</a>
<?php include('rodape.php'); ?>