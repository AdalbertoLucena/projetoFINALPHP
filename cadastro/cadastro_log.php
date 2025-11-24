<?php
session_start();
include_once __DIR__ . "/cadastro_banco.php";

$erro = $_SESSION['erro'] ?? '';
unset($_SESSION['erro']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $stmt = mysqli_prepare($conn, "SELECT * FROM novos WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);

    if ($res && mysqli_num_rows($res) === 1) {
        $user = mysqli_fetch_assoc($res);
        if (password_verify($senha, $user['senha'])) {
            $_SESSION['usuario_id'] = $user['id'];
            $_SESSION['usuario_nome'] = $user['nome'];
            header("Location: ../projeto/index.php");
            exit;
        } else {
            $_SESSION['erro'] = "Senha incorreta!";
            header("Location: cadastro_log.php");
            exit;
        }
    } else {
        $_SESSION['erro'] = "Usuário não encontrado!";
        header("Location: cadastro_log.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<style>
body { background: #000; color: #fff; font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin:0; }
.box { width: 350px; background: #111; padding: 25px; border-radius: 12px; box-shadow: 0 0 12px rgba(255,255,255,0.15); position: relative; }
input, button { width: 100%; padding: 12px; border: none; border-radius: 6px; margin-bottom: 15px; box-sizing: border-box; }
input { background: #222; color: #fff; }
input::placeholder { color: #aaa; }
button { background: #444; color: #fff; cursor: pointer; transition: .2s; }
button:hover { background: #666; }
.erro { background: #550000; padding: 10px; border-radius: 6px; color: #ff9999; text-align: center; margin-bottom: 15px; }
.fechar { position: absolute; top: 10px; right: 15px; color: #fff; font-size: 22px; text-decoration: none; cursor: pointer; transition: .2s; }
.fechar:hover { color: #f00; }
.cadastro-texto a { color: red; text-decoration: none; font-size: 14px; display: block; text-align: center; margin-top: 10px; }
.cadastro-texto a:hover { color: #ff4444; }
</style>
</head>
<body>

<div class="box">
<a href="../projeto/index.php" class="fechar">×</a>
<h2>Login</h2>

<?php if (!empty($erro)): ?>
    <div class="erro"><?php echo $erro; ?></div>
<?php endif; ?>

<form method="POST">
<input type="email" name="email" placeholder="Seu email" required>
<input type="password" name="senha" placeholder="Sua senha" required>
<button type="submit">Entrar</button>
</form>

<div class="cadastro-texto">
<a href="cadastro_formulario.php">Criar conta</a>
</div>

</div>
</body>
</html>