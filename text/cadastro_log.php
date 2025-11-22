<?php
session_start(); // INICIA A SESSÃO AQUI

include "cadastro_banco.php"; // conexão + funções

// Se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificar usuário no banco
    $sql = "SELECT * FROM novos WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Se o email existe
    if ($resultado->num_rows == 1) {

        $user = $resultado->fetch_assoc();

        // Verificar senha (sem hash, pois seu banco salva texto puro)
        if ($senha == $user['senha']) {

            // Criar sessão
            $_SESSION['usuario_id'] = $user['id'];
            $_SESSION['usuario_nome'] = $user['nome'];
            $_SESSION['usuario_email'] = $user['email'];

            // 👉 REDIRECIONA PARA A PÁGINA INICIAL (index.php)
            header("Location: index.php");
            exit;
        }
    }

    // Se deu errado
    header("Location: login.php?erro=1");
    exit;
}
?>
