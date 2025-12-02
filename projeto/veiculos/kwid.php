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
                <img class="car-image" src="https://s2.glbimg.com/eaTJV7tLOellWlLRozE9QlidATI=/fit-in/940x590/e.glbimg.com/og/ed/f/original/2017/06/12/renault-kwid-dianteira.jpg" alt="CARRO">
            </div>
            <p class="price">R$ 110,00</p>

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
                <input type="hidden" name="modelo" value="Renault Kwid 1.0 2024">
                <input type="hidden" name="diaria" value="110">
                <label for="dias">Diárias</label>
                <input id="dias" name="dias" type="number" min="1" value="1" class="dias-input">
                <button type="submit" class="btn btn-primary">FINALIZAR</button>
            </form>
        </div>
    </main>
</body>
</html>