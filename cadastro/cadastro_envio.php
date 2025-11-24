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

// Ler e sanitizar campos (ajuste os names conforme seu formulário)
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
if ($checkStmt = $conn->prepare($checkSql)) {
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $res = $checkStmt->get_result();
    if ($res && $res->num_rows > 0) {
        $_SESSION['msg'] = 'Email já cadastrado.';
        header("Location: cadastro_formulario.php");
        exit;
    }
}

// Inserir novo usuário (mantendo compatibilidade com seu banco sem hash)
$insertSql = "INSERT INTO novos (nome, email, senha) VALUES (?, ?, ?)";
if ($ins = $conn->prepare($insertSql)) {
    $ins->bind_param("sss", $nome, $email, $senha);
    if ($ins->execute()) {
        $_SESSION['msg'] = 'Cadastro realizado. Faça login.';
        header("Location: login.php");
        exit;
    } else {
        $_SESSION['msg'] = 'Erro ao salvar no banco.';
        header("Location: cadastro_formulario.php");
        exit;
    }
} else {
    $_SESSION['msg'] = 'Erro interno.';
    header("Location: cadastro_formulario.php");
    exit;
}
?>

