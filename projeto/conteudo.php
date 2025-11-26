<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="conteudo.css">
    <title>Carousel Centralizado</title>
</head>
<body class="bg-dark">

    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="6" aria-label="Slide 7"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="d-flex justify-content-center align-items-center vh-100 w-100">
                    <img src="https://cronos.fiat.com.br/asset/versions/359ATH1/806.webp" 
                        class="img-fluid" style="max-width: 40%; height: auto;" alt="cronos">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 fw-bold"><a class="car-link" href="detalhes.php?car=aston-db">FIAT CRONOS</a></h1>
                    <p class="lead">2024</p>
                    <a class="btn btn-warning cta-button" href="veiculos/cronos.php">Ver detalhes</a>
                </div>
            </div>

            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center vh-100 w-100">
                    <img src="https://cdn-site-seminovos.localiza.com/prd/site/anuncio/323026/hyundai-hb20s-comfort-plus-tgdi-flex-at-10-2024-branco-automatico-seminovo-323026-5bdb2648-1dae-45b6-9deb-da99fdda645e-1.jpg" 
                        class="img-fluid" style="max-width: 40%; height: auto;" alt="Hyundai">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 fw-bold"><a class="car-link" href="veiculos/hyundai.php">Hyundai</a></h1>
                    <p class="lead">2024</p>
                    <a class="btn btn-warning cta-button" href="veiculos/hyundai.php">Ver detalhes</a>
                </div>
            </div>

            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center vh-100 w-100">
                    <img src="https://free.citycaraluguel.com.br/wp-content/uploads/2024/06/polo-track60c869f1b65c6148b0fa39064d020195-1024x474.png" 
                        class="img-fluid" style="max-width: 40%; height: auto;" alt="polo">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 fw-bold"><a class="car-link" href="detalhes.php?car=audi-a5">VW POLO</a></h1>
                    <p class="lead">2023</p>
                    <a class="btn btn-warning cta-button" href="veiculos/polo.php">Ver detalhes</a>
                </div>
            </div>

            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center vh-100 w-100">
                    <img src="https://storage.googleapis.com/dealersites-content/dealersites/vehicles/versions/volkswagen/foto890_44434.webp" 
                        class="img-fluid" style="max-width: 40%; height: auto;" alt="tera">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 fw-bold"><a class="car-link" href="detalhes.php?car=premium-suv">VW TERA</a></h1> 
                    <p class="lead">2025</p>
                    <a class="btn btn-warning cta-button" href="veiculos/tera.php">Ver detalhes</a>
                </div>
            </div>

            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center vh-100 w-100">
                    <img src="https://toribaveiculos.com.br/wp-content/uploads/2025/01/200-TSI.png" 
                        class="img-fluid" style="max-width: 40%; height: auto;" alt="tcross">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 fw-bold"><a class="car-link" href="detalhes.php?car=premium-sedan">VW TCROSS</a></h1>
                    <p class="lead">2024</p>
                    <a class="btn btn-warning cta-button" href="veiculos/tcross.php">Ver detalhes</a>
                </div>
            </div>

            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center vh-100 w-100">
                    <img src="https://chevroletorca.com.br/uploads/products/versions/azul-eclipse-1.png" 
                        class="img-fluid" style="max-width: 40%; height: auto;" alt="Carro Grande">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 fw-bold"><a class="car-link" href="detalhes.php?car=carro-grande">s10</a></h1>
                    <p class="lead">2024</p>
                    <a class="btn btn-warning cta-button" href="veiculos/s10.php">Ver detalhes</a>
                </div>
            </div>

            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center vh-100 w-100">
                    <img src="https://www.chevroletnova.com.br/images/versoes/fotos/2025/08/1-0-2026_1754665390_4362.png" 
                        class="img-fluid" style="max-width: 40%; height: auto;" alt="Carro Grande Repetido">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 fw-bold"><a class="car-link" href="detalhes.php?car=carro-grande-2">ONIX</a></h1>
                    <p class="lead">2024</p>
                    <a class="btn btn-warning cta-button" href="veiculos/onix.php">Ver detalhes</a>
                </div>
            </div>


        </div> <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
        
    </div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>