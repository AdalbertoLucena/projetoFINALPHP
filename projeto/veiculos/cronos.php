<?php/*
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../cadastro_formulario.php");
    exit;
}*/
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
            <h1 class="car-title">MODELO DO CARRO</h1>
            <div class="image-wrap">
                <img class="car-image" src="https://cronos.fiat.com.br/asset/versions/359ATH1/806.webp" alt="CARRO">
            </div>
            <p class="price">R$ 150,00</p>

            <div class="description">
                <p>Descrição curta: O Fiat Cronos é um sedã compacto que se destaca no mercado brasileiro e argentino, principalmente pelo seu amplo porta-malas de 525 litros e pelo bom custo-benefício que oferece, sendo uma opção popular para quem busca espaço e economia.</p>
                <ul class="features">
                    <li><strong>Ano:</strong> 2024</li>
                    <li><strong>Combustível:</strong> Flex</li>
                    <li><strong>Câmbio:</strong> Automático</li>
                    <li><strong>Passageiros:</strong> 5</li>
                </ul>
            </div>

            <form class="reserve-form" method="post" action="reserva.php">
                <input type="hidden" name="modelo" value="Fiat Cronos 1.3 2023">
                <input type="hidden" name="diaria" value="150">
                <label for="dias">Diárias</label>
                <input id="dias" name="dias" type="number" min="1" value="1" class="dias-input">
                <button type="submit" class="btn btn-primary">FINALIZAR</button>
            </form>
        </div>
    </main>
</body>
</html>