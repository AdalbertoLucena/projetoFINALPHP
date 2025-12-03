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
                <img class="car-image" src="https://chevroletorca.com.br/uploads/products/versions/azul-eclipse-1.png" alt="CARRO">
            </div>
            <p class="price">R$ 320,00</p>

            <div class="description">
                <p>Descrição curta: A Chevrolet S10 é uma picape de porte médio produzida no Brasil desde 1995, conhecida pela sua robustez e força, sendo um dos modelos mais longevos da marca no país. A linha 2026, em particular, trouxe atualizações significativas em motorização, tecnologia e segurança. 
</p>
                <ul class="features">
                    <li><strong>Ano:</strong> 2024</li>
                    <li><strong>Combustível:</strong> Flex</li>
                    <li><strong>Câmbio:</strong> Automático</li>
                    <li><strong>Passageiros:</strong> 5</li>
                </ul>
            </div>

            <form class="reserve-form" method="post" action="reserva.php">
                <input type="hidden" name="modelo" value="GM S10 (aut/manual) 2024">
                <input type="hidden" name="diaria" value="320">
                <label for="dias">Diárias</label>
                <input id="dias" name="dias" type="number" min="1" value="1" class="dias-input">
                <button type="submit" class="btn btn-primary">AFINALIZAR</button>
            </form>
        </div>
    </main>
</body>
</html>