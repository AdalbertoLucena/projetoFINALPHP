<?php
echo "<h1 style='text-align:center; color:#ffcc00; margin-top:20px;'>Fale Conosco</h1>";
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(180deg, #727272 0%, #000000 100%);
        color: #fff;
        margin: 0;
        padding: 0;
    }

    .contact-form {
        max-width: 500px;
        margin: 40px auto;
        background: rgba(0,0,0,0.6);
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.3);
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 8px;
        border: 1px solid rgba(255,255,255,0.2);
        background: rgba(255,255,255,0.05);
        color: #fff;
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
        outline: none;
        border-color: #ffcc00;
        box-shadow: 0 0 5px #ffcc00;
    }

    .form-check {
        margin-bottom: 15px;
    }

    .form-check input[type="checkbox"] {
        margin-right: 10px;
    }

    .btn-submit {
        background: #ffcc00;
        color: #000;
        font-weight: bold;
        padding: 12px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        width: 100%;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .btn-submit:hover {
        background: #ffb800;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }
</style>

<div class="contact-form">
    <form action="/action_page.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Seu nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="seu@email.com" required>

        <div class="form-check">
            <input type="checkbox" id="subscribe" name="subscribe">
            <label for="subscribe">Quero receber novidades</label>
        </div>

        <button type="submit" class="btn-submit">Enviar</button>
    </form>
</div>



