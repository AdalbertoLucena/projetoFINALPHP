<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Carousel Centralizado</title>
</head>
<body class="bg-dark">

  <!-- Carousel Fullscreen / Centralizado -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicadores (adicionei o 4º) -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button> <!-- Removi aria-current desnecessário -->
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">

      <div class="carousel-item active">
        <div class="d-flex justify-content-center align-items-center vh-100 w-100">
          <img src="https://www.enterprise.com/content/dam/ecom/utilitarian/common/exotics/car-thumbnails/Aston-Martin-DBX_HERO-THUMBNAIL_2048x1360.png" 
               class="img-fluid" style="max-width: 80%; height: auto;" alt="Aston Martin DBX">
        </div>
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-4 fw-bold">Los Angeles</h1>
          <p class="lead">We had such a great time in LA!</p>
        </div>
      </div>

      <div class="carousel-item">
        <div class="d-flex justify-content-center align-items-center vh-100 w-100">
          <img src="https://www.enterprise.com/content/dam/ecom/utilitarian/common/exotics/us-refresh/car-thumbnails/thumbnail-2018-aston-martin-vantage-2048x1360.png" 
               class="img-fluid" style="max-width: 80%; height: auto;" alt="Aston Martin Vantage"> <!-- Corrigi alt para combinar com a imagem -->
        </div>
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-4 fw-bold">Chicago</h1>
          <p class="lead">Thank you, Chicago!</p>
        </div>
      </div>

      <div class="carousel-item">
        <div class="d-flex justify-content-center align-items-center vh-100 w-100">
          <img src="https://www.enterprise.com/content/dam/ecom/utilitarian/common/exotics/us-refresh/car-thumbnails/thumbnail-2020-audi-a5-coupe-2048x1360.png" 
               class="img-fluid" style="max-width: 80%; height: auto;" alt="Audi A5 Coupe"> <!-- Removi o "100´px" inválido; se quiser, adicione width="100px" aqui -->
        </div>
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-4 fw-bold">New York</h1>
          <p class="lead">We love the Big Apple!</p>
        </div>
      </div>

      <div class="carousel-item">
        <div class="d-flex justify-content-center align-items-center vh-100 w-100">
          <img src="https://assets.gcs.ehi.com/content/enterprise_cros/data/vehicle/bookingCountries/US/SUVS/PGAR.doi.768.high.imageSmallThreeQuarterNodePath.png/1740004423988.png" 
               class="img-fluid" style="max-width: 80%; height: auto;" alt="Carro Premium"> <!-- Removi o "100´px" inválido; corrigi alt genérico -->
        </div>
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-4 fw-bold">Outra Cidade</h1> <!-- Mudei para evitar repetição; ajuste conforme necessário -->
          <p class="lead">Outra descrição aqui!</p>
        </div>
      </div>

      <div class="carousel-item">
  <div class="d-flex justify-content-center align-items-center vh-100 w-100">
    <img src="https://assets.gcs.ehi.com/content/enterprise_cros/data/vehicle/bookingCountries/US/CARS/PCAR.doi.768.high.imageSmallThreeQuarterNodePath.png/1740004172813.png" 
         class="img-fluid" style="max-width: 80%; height: auto;" alt="Carro Premium">
  </div>
  <div class="carousel-caption d-none d-md-block">
    <h1 class="display-4 fw-bold">Outra Cidade</h1>
    <p class="lead">Outra descrição aqui!</p>
  </div>
</div>

      <div class="carousel-item">
  <div class="d-flex justify-content-center align-items-center vh-100 w-100">
    <img src="https://assets.gcs.ehi.com/content/enterprise_cros/data/vehicle/bookingCountries/US/CARS/WCAR.doi.768.high.imageSmallThreeQuarterNodePath.png/1753220631881.png" 
         class="img-fluid" style="max-width: 80%; height: auto;" alt="Carro Premium">
  </div>
  <div class="carousel-caption d-none d-md-block">
    <h1 class="display-4 fw-bold">Outra Cidade</h1>
    <p class="lead">Outra descrição aqui!</p>
  </div>
</div>



    </div>

    <!-- Controles esquerdo/direito -->
     
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
    
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


