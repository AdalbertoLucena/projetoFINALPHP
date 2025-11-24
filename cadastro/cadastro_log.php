<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>

<style>
    body {
        background: #000;
        color: #fff;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .box {
        width: 350px;
        background: #111;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 0 12px rgba(255,255,255,0.15);
        position: relative;
    }

    .fechar {
        position: absolute;
        top: 10px;
        right: 15px;
        color: #fff;
        font-size: 22px;
        text-decoration: none;
        cursor: pointer;
        transition: 0.2s;
    }
    .fechar:hover { color: #f00; }

    input {
        width: 100%;
        padding: 12px;
        border: none;
        background: #222;
        color: white;
        margin-bottom: 15px;
        border-radius: 6px;
    }

    button {
        width: 100%;
        padding: 12px;
        background: #444;
        color: #fff;
        border: none;
        border-radius: 6px;
        margin-bottom: 10px;
        cursor: pointer;
        transition: .2s;
    }

    button:hover { background: #666; }

    .cadastro-texto a {
        color: red;
        text-decoration: none;
        font-size: 14px;
        display: block;
        text-align: center;
        margin-top: 10px;
    }

    .cadastro-texto a:hover { color: #ff4444; }

    .erro {
        background: #550000;
        padding: 10px;
        border-radius: 6px;
        color: #ff9999;
        text-align: center;
        margin-bottom: 15px;
    }
</style>
</head>

<body>
<div class="box">

    <!-- X para voltar ao INDEX na pasta /projeto -->
    <a href="../projeto/index.php" class="fechar">×</a>

    <h2>Login</h2>

    <?php if (!empty($erro)): ?>
        <div class="erro"><?php echo $erro; ?></div>
    <?php endif; ?>

    <form action="cadastro_log.php" method="POST">
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

