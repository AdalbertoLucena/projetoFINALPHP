<?php
session_start();

// Apaga todas as variáveis da sessão
session_unset();

// Destroi a sessão completamente
session_destroy();

// Redireciona para o index
header("Location: index.php");
exit;
?>
