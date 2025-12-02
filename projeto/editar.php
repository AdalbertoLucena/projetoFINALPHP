<?php
session_start();

// Bloquear quem não está logado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../cadastro/cadastro_log.php");
    exit;
}

include_once "../cadastro/cadastro_banco.php";

$id = $_SESSION['usuario_id'];

// Buscar dados atuais
$sql = "SELECT nome, telefone, endereco, foto FROM novos WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$usuario = mysqli_fetch_assoc($result);

// Foto
$fotoAtual = (!empty($usuario['foto']) && file_exists("../cadastro/" . $usuario['foto']))
    ? "../cadastro/" . $usuario['foto']
    : "../cadastro/img/padrao.png";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Perfil</title>

<style>
    body {
        background: #0c0c0c;
        color: white;
        font-family: Arial, sans-serif;
    }
    .container {
        width: 90%;
        max-width: 500px;
        margin: 40px auto;
        background: #1a1a1a;
        padding: 25px;
        border-radius: 12px;
        position: relative; /* permite usar botão X dentro */
    }

    /* BOTÃO X IGUAL AO OUTRO */
    .voltar {
        position: absolute;
        top: 15px;
        left: 15px;
        background: #b83232;
        color: white;
        font-size: 22px;
        font-weight: bold;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: none;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.2s;
    }
    .voltar:hover {
        background: #7a2121;
    }

    input, button {
        width: 100%;
        padding: 12px;
        margin-top: 10px;
        border-radius: 8px;
        border: none;
    }
    button {
        background: #2b6cb0;
        color: white;
        font-weight: bold;
        cursor: pointer;
    }
    button:hover {
        background: #1e4e7a;
    }
    img {
        display: block;
        margin: 60px auto 20px auto; /* espaço por causa do botão X */
        width: 140px;
        height: 140px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #444;
    }
</style>
</head>
<body>

<div class="container">

    <!-- Botão X para voltar ao perfil -->
    <button class="voltar" onclick="window.location.href='perfil.php'">X</button>

    <h2 style="text-align:center; margin-top: 20px;">Editar Perfil</h2>

    <img src="<?= $fotoAtual ?>" alt="Foto">

    <form action="editar_envio.php" method="POST" enctype="multipart/form-data">

        <label>Nome:</label>
        <input type="text" name="nome" value="<?= $usuario['nome'] ?>" required>

        <label>Telefone:</label>
        <input type="text" name="telefone" value="<?= $usuario['telefone'] ?>">

        <label>Endereço:</label>
        <input type="text" name="endereco" value="<?= $usuario['endereco'] ?>">

        <label>Foto (opcional):</label>
        <input type="file" name="foto">

        <button type="submit">Salvar Alterações</button>

    </form>

</div>

</body>
</html>
