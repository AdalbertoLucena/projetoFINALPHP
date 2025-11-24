<?php
session_start();
include_once __DIR__ . "/cadastro_banco.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Validar campos obrigatórios
    if (empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha'])) {
        $_SESSION['msg'] = "Preencha todos os campos!";
        header("Location: cadastro_formulario.php");
        exit;
    }

    $nome = trim($_POST['nome']);
    $endereco = trim($_POST['endereco']);
    $telefone = trim($_POST['telefone']);
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];
    $data_nascimento = $_POST['data_nascimento'];

    // mover foto usando a função correta
    $foto = mover_foto($_FILES['foto']); // retorna nome do arquivo ou null

    // Se não enviou foto, usa a imagem padrão
    if (empty($foto)) {
        $foto = "padrao.png"; // arquivo que deve existir em ../cadastro/img/
    }

    // hash da senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Verifica se email já existe
    $checkSql = "SELECT id FROM novos WHERE email = ? LIMIT 1";
    $stmtCheck = mysqli_prepare($conn, $checkSql);
    mysqli_stmt_bind_param($stmtCheck, "s", $email);
    mysqli_stmt_execute($stmtCheck);
    $resCheck = mysqli_stmt_get_result($stmtCheck);
    if ($resCheck && mysqli_num_rows($resCheck) > 0) {
        $_SESSION['msg'] = "Email já cadastrado!";
        header("Location: cadastro_formulario.php");
        exit;
    }

    // Inserir no banco
    $stmt = mysqli_prepare($conn, "INSERT INTO novos (nome, endereco, telefone, email, senha, data_nascimento, foto) VALUES (?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sssssss", $nome, $endereco, $telefone, $email, $senha_hash, $data_nascimento, $foto);
    if (!mysqli_stmt_execute($stmt)) {
        $_SESSION['msg'] = "Erro ao salvar no banco: " . mysqli_stmt_error($stmt);
        header("Location: cadastro_formulario.php");
        exit;
    }

    // criar sessão
    $_SESSION['usuario_id'] = mysqli_insert_id($conn);
    $_SESSION['usuario_nome'] = $nome;
    $_SESSION['foto'] = $foto;

    mysqli_stmt_close($stmt);

    header("Location: ../projeto/index.php");
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
input, button { width: 100%; padding: 12px; border: none; border-radius: 6px; margin-bottom: 15px; box-sizing: border-box; }
input { background: #222; color: #fff; }
input::placeholder { color: #aaa; }
button { background: #444; color: #fff; cursor: pointer; transition: .2s; }
button:hover { background: #666; }
.erro { background: #550000; padding: 10px; border-radius: 6px; color: #ff9999; text-align: center; margin-bottom: 15px; }
</style>
</head>
<body>

<div class="box">
<h2>Cadastro</h2>

<?php
if (!empty($_SESSION['msg'])) {
    echo "<div class='erro'>{$_SESSION['msg']}</div>";
    unset($_SESSION['msg']);
}
?>

<form method="POST" enctype="multipart/form-data">
<input type="text" name="nome" placeholder="Nome Completo">
<input type="text" name="endereco" placeholder="Endereço">
<input type="tel" name="telefone" placeholder="Telefone">
<input type="email" name="email" placeholder="Email">
<input type="password" name="senha" placeholder="Senha">
<input type="date" name="data_nascimento">
<input type="file" name="foto" accept="image/*">
<button type="submit">Salvar</button>
</form>

<button onclick="window.location.href='cadastro_log.php'">Voltar ao Login</button>
</div>

</body>
</html>
