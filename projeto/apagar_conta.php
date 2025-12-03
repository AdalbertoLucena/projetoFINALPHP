<?php
if (!isset($_SESSION)) session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../cadastro/cadastro_log.php");
    exit;
}

//inclui o arquivo que esta a conexao com o banco de dados 
include_once "../cadastro/cadastro_banco.php";

$id = $_SESSION['usuario_id'];

// Usar a tabela correta: NOVOS
$sql = "DELETE FROM novos WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die("Erro no prepare(): " . mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {

    // apagar sessão
    session_destroy();

    header("Location: index.php");
    exit;

} else {
    echo "Erro ao excluir conta: " . mysqli_stmt_error($stmt);
}
?>
