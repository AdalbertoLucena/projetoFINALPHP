<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro</title>

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
        width: 380px;
        background: #111;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 0 12px rgba(255,255,255,0.15);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    input {
        width: 100%;
        padding: 12px;
        border: none;
        background: #222;
        color: white;
        margin-bottom: 15px;
        border-radius: 6px;
    }

    input::placeholder {
        color: #aaa;
    }

    button {
        width: 100%;
        padding: 12px;
        background: #444;
        color: #fff;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: .2s;
    }

    button:hover {
        background: #666;
    }

    .sucesso {
        background: #003300;
        padding: 10px;
        border-radius: 6px;
        color: #99ff99;
        text-align: center;
        margin-bottom: 15px;
    }
</style>

</head>

<body>

<div class="box">
    <h2>Cadastro</h2>

    <?php if(!empty($_GET["ok"])): ?>
        <div class="sucesso">
            Cadastro realizado com sucesso!
        </div>
    <?php endif; ?>

    <form method="POST" action="cadastro_envio.php" enctype="multipart/form-data">
        <!-- colocar o require -->
        <input type="text" name="nome" placeholder="Nome Completo" >

        <input type="text" name="endereco" placeholder="Endereço" >

        <input type="text" name="telefone" placeholder="Telefone" >

        <input type="email" name="email" placeholder="Email" >

        <input type="text" name="senha" placeholder="Senha" >

        <input type="date" name="data_nascimento" >

        <input type="file" name="foto" accept="image/*">

        <?php if(empty($_GET["ok"])): ?>
            <button type="submit">Salvar</button>
        <?php endif; ?>
    </form>

    <br>

    <!-- Botão para voltar ao login -->
    <button onclick="window.location.href='cadastro_log.php'">Voltar ao Login</button>
</div>

</body>
</html>
