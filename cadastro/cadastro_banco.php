<?php
// cadastro_envio.php - insere novo usuário no banco
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params(['path' => '/']);
    session_start();
}

include_once __DIR__ . "/cadastro_banco.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: cadastro_formulario.php");
    exit;
}

// Ler e sanitizar campos
$nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$senha = isset($_POST['senha']) ? trim($_POST['senha']) : '';

// Validações simples
if ($nome === '' || $email === '' || $senha === '') {
    $_SESSION['msg'] = 'Preencha todos os campos.';
    header("Location: cadastro_formulario.php");
    exit;
}

// Verifica se email já existe
$checkSql = "SELECT id FROM novos WHERE email = ? LIMIT 1";
$checkStmt = mysqli_prepare($conn, $checkSql);
if ($checkStmt) {
    mysqli_stmt_bind_param($checkStmt, "s", $email);
    mysqli_stmt_execute($checkStmt);
    $res = mysqli_stmt_get_result($checkStmt);
    if ($res && mysqli_num_rows($res) > 0) {
        $_SESSION['msg'] = 'Email já cadastrado.';
        header("Location: cadastro_formulario.php");
        exit;
    }
} else {
    $_SESSION['msg'] = 'Erro interno no banco.';
    header("Location: cadastro_formulario.php");
    exit;
}

// Inserir novo usuário
$insertSql = "INSERT INTO novos (nome, email, senha) VALUES (?, ?, ?)";
$insStmt = mysqli_prepare($conn, $insertSql);
if ($insStmt) {
    mysqli_stmt_bind_param($insStmt, "sss", $nome, $email, $senha);
    if (mysqli_stmt_execute($insStmt)) {
        $_SESSION['msg'] = 'Cadastro realizado. Faça login.';
        header("Location: login.php");
        exit;
    } else {
        $_SESSION['msg'] = 'Erro ao salvar no banco.';
        header("Location: cadastro_formulario.php");
        exit;
    }
} else {
    $_SESSION['msg'] = 'Erro interno no banco.';
    header("Location: cadastro_formulario.php");
    exit;
}
?>
