<?php
session_start();
require "cadastro_banco.php"; // conexão e funções

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data_nascimento = $_POST['data_nascimento'];

    // mover foto usando sua função
    $foto = mover_foto($_FILES['foto']);

    // hash da senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // preparar a query usando procedural
    $stmt = mysqli_prepare($conn, "INSERT INTO novos (nome, endereco, telefone, email, senha, data_nascimento, foto) VALUES (?, ?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        die("Erro no prepare: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "sssssss", $nome, $endereco, $telefone, $email, $senha_hash, $data_nascimento, $foto);
    mysqli_stmt_execute($stmt);

    // pega o ID do usuário cadastrado
    $usuario_id = mysqli_insert_id($conn);

    // criar sessão
    $_SESSION['usuario_id'] = $usuario_id;
    $_SESSION['usuario_nome'] = $nome;

    // redireciona para index da pasta projeto
    header("Location: ../pojeto/index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro</title>
<style>
body { background: #000; color: #fff; font-family: Arial, sans-serif; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh; }
.box { width: 380px; background: #111; padding: 25px; border-radius: 12px; box-shadow: 0 0 12px rgba(255,255,255,0.15); }
h2 { text-align: center; margin-bottom: 20px; }
input { width: 100%; padding: 12px; border: none; background: #222; color: white; margin-bottom: 15px; border-radius: 6px; }
input::placeholder { color: #aaa; }
button { width: 100%; padding: 12px; background: #444; color: #fff; border: none; border-radius: 6px; cursor: pointer; transition: .2s; }
button:hover { background: #666; }
</style>
</head>
<body>

<div class="box">
<h2>Cadastro</h2>
<form method="POST" action="" enctype="multipart/form-data">
<input type="text" name="nome" placeholder="Nome Completo">
<input type="text" name="endereco" placeholder="Endereço">
<input type="text" name="telefone" placeholder="Telefone">
<input type="email" name="email" placeholder="Email">
<input type="text" name="senha" placeholder="Senha">
<input type="date" name="data_nascimento">
<input type="file" name="foto" accept="image/*">
<button type="submit">Salvar</button>
</form>
<br>
<button onclick="window.location.href='cadastro_log.php'">Voltar ao Login</button>
</div>

</body>
</html>
