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
                <img class="car-image" src="https://argo.fiat.com.br/content/dam/fiat/products/358/acs/1/2026/page/hero.webp" alt="CARRO">
            </div>

            <p class="price">R$ 135,00</p>

            <div class="description">
                <p>Descrição curta: Hyundai HB20S Comfort Plus com baixo consumo, acabamento interno em tecido premium e itens de segurança completos. Ideal para viagens e uso diário.</p>
                <ul class="features">
                    <li><strong>Ano:</strong> 2024</li>
                    <li><strong>Combustível:</strong> Flex</li>
                    <li><strong>Câmbio:</strong> Automático</li>
                    <li><strong>Passageiros:</strong> 5</li>
                </ul>
            </div>


            
<!--------botao finalizar-------->
<a href="/projetoFINALPHP/projeto/confirmacao.php"
   class="btn btn-primary"
   style="
       display:block;
       text-align:center;
       padding:12px;
       margin-top:20px;
       background:#3498db;
       color:#fff;
       border-radius:8px;
       text-decoration:none;
       font-size:16px;
   ">
    FINALIZAR
</a>


        </div> <!-- FECHAMENTO DA DIV CARD -->

    </main> <!-- FECHAMENTO DO MAIN -->

</body>
</html>
