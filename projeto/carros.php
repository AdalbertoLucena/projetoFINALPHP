<?php
// Protege a página para apenas usuários logados
session_start();

// Se o usuário não estiver logado, redireciona para cadastro_log.php
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../cadastro/cadastro_log.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Hegarty&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
    <title>Aluga PB</title>
    
</head>
<body>
    <header class="header">
    
       <section>

        <a href="#" class="logo">
            <img src="logo.img" alt="logo">

        </a>

        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">suvs</a>
            <a href="#">Sedans</a>
            <a href="#">Sportivos</a>

        </nav>

        <div class="icons">

        </div>
        </section>
    </header> 

    <!-- COLOCAR IMAGEN DOS CARROS E OS VALORES -->
    <section class="menu" id="menu">
        <h2 class="title">Nosso <span>catalogo</span></h2>
        <div class="box-container">
            <div class="box">
               <img src="https://www.localiza.com/brasil-site/geral/Frota/HB2C.png" alt="">
                <h3>Hyundai HB20S 1.0 2025</h3>
                <div class="preço">R$180,00</div>
              <a href="veiculos/hyundai.php" class="btn">ALUGAR</a>
            </div> 
             <div class="box">
                <img src="https://www.localiza.com/brasil-site/geral/Frota/KWID.png" alt="item-1">
                <h3>Renault Kwid 1.0 2024</h3>
                <div class="preço">R$110,00</div>
                <a href="veiculos/kwid.php" class="btn">ALUGAR</a>
            </div>
             <div class="box">
                <img src="https://www.localiza.com/brasil-site/geral/Frota/GOLC.png" alt="item-1">
                <h3>VW Gol 1.0 2022</h3>
                <div class="preço">R$120,00</div>
                <a href="veiculos/gol.php" class="btn">ALUGAR</a>
            </div>
             <div class="box">
                <img src="https://www.localiza.com/brasil-site/geral/Frota/ARGO.png" alt="item-1">
                <h3>Fiat Argo 1.0 2023</h3>
                <div class="preço">R$135,00</div>
                <a href="veiculos/argo.php" class="btn">ALUGAR</a>
            </div>
             <div class="box">
                <img src="https://www.localiza.com/brasil-site/geral/Frota/POLO.png" alt="item-1">
                <h3>VW Polo Hatch 1.0 Turbo 2024</h3>
                <div class="preço">R$130,00</div>
                <a href="veiculos/polo.php" class="btn">ALUGAR</a>
            </div>
             <div class="box">
                <img src="https://www.localiza.com/brasil-site/geral/Frota/CROX.png" alt="item-1">
                <h3>Fiat Cronos 1.3 2023</h3>
                <div class="preço">R$150,00</div>
                <a href="veiculos/cronos.php" class="btn">ALUGAR</a>
            </div>
             <div class="box">
                <img src="https://www.localiza.com/brasil-site/geral/Frota/ONIH.png" alt="item-1">
                <h3>GM Onix LTZ 1.0 AT 2024</h3>
                <div class="preço">R$120,00</div>
                <a href="veiculos/onix.php" class="btn">ALUGAR</a>
            </div>
             <div class="box">
                <img src="https://www.localiza.com/brasil-site/geral/Frota/HB1X.png" alt="item-1">
                <h3>Hyundai HB20S 1.0 Turbo AT</h3>
                <div class="preço">R$200</div>
                <a href="veiculos/hb20sturbo.php" class="btn">ALUGAR</a>
            </div>
             <div class="box">
                <img src="https://www.localiza.com/brasil-site/geral/Frota/CROA.png" alt="item-1">
                <h3>Fiat Cronos 1.8 Adaptado 2025</h3>
                <div class="preço">R$189,99</div>
                <a href="veiculos/cronosadaptado.php" class="btn">ALUGAR</a>
            </div>
             <div class="box">
                <img src="https://www.localiza.com/brasil-site/geral/Frota/VTER.png" alt="item-1">
                <h3>Volkswagen Tera 1.0 AT 2025</h3>
                <div class="preço">R$250,00</div>
                <a href="veiculos/tera.php" class="btn">ALUGAR</a>
            </div>
             <div class="box">
                <img src="https://www.localiza.com/brasil-site/geral/Frota/TCRO.png" alt="item-1">
                <h3>VW T-Cross 1.0 Turbo 2025</h3>
                <div class="preço">R$190,00</div>
                <a href="veiculos/tcross.php" class="btn">ALUGAR</a>
            </div>
             <div class="box">
                <img src="https://www.localiza.com/brasil-site/geral/Frota/S10X.png" alt="item-1">
                <h3>GM S10 (aut/manual) 2024</h3>
                <div class="preço">R$320,00</div>
                <a href="veiculos/s10.php" class="btn">ALUGAR</a>
            </div>
            

        </div>



    </section>

</body>