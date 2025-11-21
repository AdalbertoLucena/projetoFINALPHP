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
                <img class="car-image" src="https://www.autoo.com.br/fotos/2019/7/1280_960/crn1_02072019_14073_1280_960.jpg" alt="CARRO">
            </div>
            <p class="price">R$ 189,99</p>

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
                <input type="hidden" name="modelo" value="Fiat Cronos 1.8 Adaptado 2025">
                <input type="hidden" name="diaria" value="189.99">
                <label for="dias">Diárias</label>
                <input id="dias" name="dias" type="number" min="1" value="1" class="dias-input">
                <button type="submit" class="btn btn-primary">FINALIZAR</button>
            </form>
        </div>
    </main>
</body>
</html>