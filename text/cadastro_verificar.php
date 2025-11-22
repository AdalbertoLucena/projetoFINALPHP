<?php
session_start();

// Se o usuário NÃO estiver logado, redireciona para o formulário de cadastro
if (!isset($_SESSION['usuario_id'])) {
    header("Location: cadastro_formulario.php");
    exit;
}
?>
