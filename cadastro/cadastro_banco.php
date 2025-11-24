<?php
// ===============================================
// INICIAR SESSÃO DE FORMA SEGURA (sem avisos)
// ===============================================
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ===============================================
// CONEXÃO COM O BANCO (SEU CÓDIGO ORIGINAL)
// ===============================================
$server = "localhost";
$bancodedados = "clientes";
$usuario = "root";
$senha = "";

$conn = mysqli_connect($server, $usuario, $senha, $bancodedados);

if (!$conn) {
    echo "Erro na conexão com o banco!";
    exit;
}

// ===============================================
// FUNÇÃO DE MENSAGEM (SEU CÓDIGO ORIGINAL)
// ===============================================
function mensagem($texto, $tipo) {
    echo "<div class='alert alert-$tipo' role='alert'>
           $texto       
        </div>";
}

// ===============================================
// FUNÇÃO PARA MOVER FOTO (SEU CÓDIGO ORIGINAL)
// ===============================================
function mover_foto($vetor_foto) {

    if ($vetor_foto['error'] != 0 || $vetor_foto['size'] == 0) {
        return null;
    }

    $tipoCompleto = $vetor_foto['type']; // ex: image/jpeg
    $partes = explode("/", $tipoCompleto);

    if ($partes[0] != "image") {
        return null;
    }

    $nome_arquivo = date('YmdHis') . "_" . rand(1000, 9999) . ".jpg";

    if (!is_dir("img")) {
        mkdir("img", 0777, true);
    }

    if (move_uploaded_file($vetor_foto['tmp_name'], "img/" . $nome_arquivo)) {
        return $nome_arquivo;
    }

    return null;
}

// ===============================================
// 🔐 AUTENTICAÇÃO DO USUÁRIO (TABELA NOVOS)
// ===============================================
function autenticar_usuario($conn, $email, $senha) {

    $sql = "SELECT * FROM novos WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {

        $user = $resultado->fetch_assoc();

        // Se você NÃO usa hash no cadastro, troque password_verify por:
        // if ($senha == $user['senha']) {
        if (password_verify($senha, $user['senha'])) {

            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            $_SESSION['usuario_id'] = $user['id'];
            $_SESSION['usuario_nome'] = $user['nome'];

            return true;
        }
    }

    return false;
}

// ===============================================
// 🛡 PROTEGER PÁGINA
// ===============================================
function proteger_pagina() {
    if (!isset($_SESSION['usuario_id'])) {
        header("Location: cadastro_formulario.php");
        exit;
    }
}
?>

