
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
                <img class="car-image" src="https://cdn.motor1.com/images/mgl/Ak29KP/s3/volkswagen-polo-track-2023-teste.jpg" alt="CARRO">
            </div>
            <p class="price">R$ 130,00</p>

            <div class="description">
                <p>Descrição curta: O Volkswagen Polo é um dos hatches compactos mais vendidos do Brasil, conhecido por sua dirigibilidade superior, suspensão bem ajustada, e uma gama de motores que equilibram eficiência e desempenho, incluindo opções turbo. 
</p>
                <ul class="features">
                    <li><strong>Ano:</strong> 2024</li>
                    <li><strong>Combustível:</strong> Flex</li>
                    <li><strong>Câmbio:</strong> Automático</li>
                    <li><strong>Passageiros:</strong> 5</li>
                </ul>
            </div>

            <form class="reserve-form" method="post" action="reserva.php">
                <input type="hidden" name="modelo" value="VW Polo Hatch 1.0 Turbo 2024">
                <input type="hidden" name="diaria" value="130">
                <label for="dias">Diárias</label>
                <input id="dias" name="dias" type="number" min="1" value="1" class="dias-input">
                <button type="submit" class="btn btn-primary">FINALIZAR</button>
            </form>
        </div>
    </main>
</body>
</html>