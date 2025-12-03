<?php
session_start();
include_once "../cadastro/cadastro_banco.php";

// Se o usuário não estiver logado → volta para login
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../cadastro/cadastro_log.php");
    exit;
}

$id = $_SESSION['usuario_id'];

// Recebe dados do formulário
$nome = $_POST['nome'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$endereco = $_POST['endereco'] ?? '';

// Variável que vai guardar o caminho da nova foto
$novoArquivo = null;

// --- UPLOAD DA FOTO ---
if (!empty($_FILES['foto']['name'])) {

    // Pasta onde as fotos serão salvas
    $pasta = "../cadastro/img/";

    // Cria a pasta se não existir
    if (!is_dir($pasta)) {
        mkdir($pasta, 0777, true);
    }

    // Nome único para a nova foto
    $nomeFoto = "foto_" . $id . "_" . time() . ".jpg";
    $caminhoFoto = $pasta . $nomeFoto;

    // Move a foto enviada para a pasta correta
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminhoFoto)) {

        // Caminho que será salvo no banco
        // OBS: isso fica relativo à pasta do perfil.php
        $novoArquivo = "img/" . $nomeFoto;
    }
}

// Se enviou foto → atualiza tudo
if ($novoArquivo) {
    $sql = "UPDATE novos SET nome=?, telefone=?, endereco=?, foto=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssi", $nome, $telefone, $endereco, $novoArquivo, $id);

} else {
    // Sem foto → não mexe no campo foto
    $sql = "UPDATE novos SET nome=?, telefone=?, endereco=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $nome, $telefone, $endereco, $id);
}

mysqli_stmt_execute($stmt);

// Redireciona de volta ao perfil
header("Location: perfil.php");
exit;
?>
