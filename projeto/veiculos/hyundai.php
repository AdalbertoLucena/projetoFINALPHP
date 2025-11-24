<?php
// Protege a página para apenas usuários logados
session_start();

// Se o usuário não estiver logado, redireciona para cadastro_log.php
if (!isset($_SESSION['usuario_id'])) {
    header("Location: .../cadastro/cadastro_log.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyundai - Alugar</title>
    <link rel="stylesheet" href="hyundai.css">
</head>
<body>
    <main class="car-page">
        <div class="card">
            <h1 class="car-title">Hyundai HB20S</h1>
            <div class="image-wrap">
                <img class="car-image" src="https://cdn-site-seminovos.localiza.com/prd/site/anuncio/323026/hyundai-hb20s-comfort-plus-tgdi-flex-at-10-2024-branco-automatico-seminovo-323026-5bdb2648-1dae-45b6-9deb-da99fdda645e-1.jpg" alt="Hyundai HB20S">
            </div>
            <p class="price">R$ 180,00</p>

            <div class="description">
                <p>Descrição curta: Hyundai HB20S Comfort Plus com baixo consumo, acabamento interno em tecido premium e itens de segurança completos. Ideal para viagens e uso diário.</p>
                <ul class="features">
                    <li><strong>Ano:</strong> 2024</li>
                    <li><strong>Combustível:</strong> Flex</li>
                    <li><strong>Câmbio:</strong> Automático</li>
                    <li><strong>Passageiros:</strong> 5</li>
                </ul>
            </div>

            <form class="reserve-form" method="post" action="reserva.php">
                <input type="hidden" name="modelo" value="Hyundai HB20S">
                <input type="hidden" name="diaria" value="180">
                <label for="dias">Diárias</label>
                <input id="dias" name="dias" type="number" min="1" value="1" class="dias-input">
                <button type="submit" class="btn btn-primary">FINALIZAR</button>
            </form>
        </div>
    </main>
</body>
</html>