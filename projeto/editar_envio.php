<?php
session_start();
include_once "../cadastro/cadastro_banco.php";

if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../cadastro/cadastro_log.php");
    exit;
}

$id = $_SESSION['usuario_id'];

$nome = $_POST['nome'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$endereco = $_POST['endereco'] ?? '';

$novoArquivo = null;

// Upload da foto (se enviada)
if (!empty($_FILES['foto']['name'])) {

    $pasta = "../cadastro/fotos/";
    if (!is_dir($pasta)) mkdir($pasta, 0777, true);

    $nomeFoto = "foto_" . $id . "_" . time() . ".jpg";
    $caminhoFoto = $pasta . $nomeFoto;

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminhoFoto)) {
        $novoArquivo = "fotos/" . $nomeFoto;
    }
}

// Se o usuário enviou foto → atualiza tudo
if ($novoArquivo) {
    $sql = "UPDATE novos SET nome=?, telefone=?, endereco=?, foto=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssi", $nome, $telefone, $endereco, $novoArquivo, $id);
} else { 
    // Sem foto → atualiza sem mexer na foto
    $sql = "UPDATE novos SET nome=?, telefone=?, endereco=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $nome, $telefone, $endereco, $id);
}

mysqli_stmt_execute($stmt);

// Redireciona de volta ao perfil
header("Location: perfil.php");
exit;
