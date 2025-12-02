<?php
session_start();

// Impede acesso sem login
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../cadastro/cadastro_log.php");
    exit;
}

// Conexão
include_once "../cadastro/cadastro_banco.php";
$id = $_SESSION['usuario_id'];

// Buscar dados do usuário
$sql = "SELECT nome, email, telefone, endereco, data_nascimento, foto FROM novos WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$usuario = mysqli_fetch_assoc($result);

// Foto
if (!empty($usuario['foto']) && file_exists("../cadastro/" . $usuario['foto'])) {
    $foto = "../cadastro/" . $usuario['foto'];
} else {
    $foto = "../cadastro/img/padrao.png"; // precisa existir
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Perfil</title>

<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">

<style>
    body {
        background-color: #0c0c0c;
        color: white;
        font-family: "Raleway", sans-serif;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 90%;
        max-width: 800px;
        margin: 50px auto;
        background: #1a1a1a;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 0 15px rgba(255,255,255,0.1);
        position: relative; /* IMPORTANTE para o botão ficar dentro */
    }

    /* --- BOTÃO X DENTRO DO QUADRADO CINZA --- */
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

    .foto {
        text-align: center;
        margin-bottom: 20px;
        margin-top: 20px; /* afastar da posição do X */
    }

    .foto img {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #444;
    }
    h2 {
        text-align: center;
        margin-bottom: 25px;
        font-size: 28px;
    }
    .info {
        background: #111;
        padding: 15px 20px;
        border-radius: 8px;
        margin-bottom: 15px;
    }
    .label {
        font-weight: 600;
        color: #bbb;
    }
    .valor {
        margin-top: 5px;
        font-size: 18px;
    }
    .botoes {
        display: flex;
        justify-content: space-between;
        margin-top: 25px;
    }
    .btn {
        padding: 12px 25px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 16px;
        font-weight: 600;
    }
    .editar { background: #2b6cb0; color: white; }
    .editar:hover { background: #1e4e7a; }
    .excluir { background: #b83232; color: white; }
    .excluir:hover { background: #7a2121; }
</style>

</head>
<body>

<div class="container">

    <!-- Botão X dentro do quadrado cinza -->
    <button class="voltar" onclick="window.location.href='index.php'">X</button>

    <div class="foto">
        <img src="<?= $foto ?>" alt="Foto do usuário">
    </div>

    <h2><?= $usuario['nome'] ?></h2>

    <div class="info">
        <div class="label">E-mail:</div>
        <div class="valor"><?= $usuario['email'] ?></div>
    </div>

    <div class="info">
        <div class="label">Telefone:</div>
        <div class="valor"><?= $usuario['telefone'] ?></div>
    </div>

    <div class="info">
        <div class="label">Endereço:</div>
        <div class="valor"><?= $usuario['endereco'] ?></div>
    </div>

    <div class="info">
        <div class="label">Data de Nascimento:</div>
        <div class="valor"><?= $usuario['data_nascimento'] ?></div>
    </div>

    <div class="botoes">
        <button class="btn editar" onclick="window.location.href='editar.php'">Editar</button>
        <button class="btn excluir" onclick="window.location.href='apagar_conta.php'">Apagar Conta</button>
    </div>

</div>

</body>
</html>
