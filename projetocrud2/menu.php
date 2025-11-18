<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Navbar com links 100% centralizados</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    /* Navbar mais alta e links bem grandes */
    .navbar {
      padding: 1.8rem 0;
    }
    .navbar-nav .nav-link {
      font-size: 1.5rem;           /* ainda maior */
      font-weight: 700;
      padding: 0.8rem 2rem !important;
      border-radius: 10px;
      transition: all 0.3s;
    }
    .navbar-nav .nav-link:hover {
      background-color: rgba(255,255,255,0.15);
      color: #fff !important;
    }

    /* Força o centro absoluto da tela */
    .navbar .center-absolute {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      z-index: 10;
    }
  </style>
</head>
<body class="bg-dark text-white">

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
  <div class="container-fluid position-relative">

    <!-- Logo à esquerda -->
    <a class="navbar-brand fs-3 fw-bold" href="#">Logo</a>

    <!-- Botão mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCenter">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links 100% centralizados (mesmo com logo) -->
    <div class="collapse navbar-collapse center-absolute" id="navbarCenter">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="carros.php">Carros</a></li>
        <li class="nav-item"><a class="nav-link" href="clientes.php">vire cliente </a></li>
        <li class="nav-item"><a class="nav-link" href="quemsomos.php">quem somos</a></li>
        <li class="nav-item"><a class="nav-link" href="faleconosco.php">Fale conosco</a></li>
      </ul>
    </div>

    <!-- Espaço invisível à direita para equilibrar a logo (opcional mas recomendado) -->
    <div class="navbar-brand invisible">Logo</div>
  </div>
</nav>

<div class="container-fluid mt-5 pt-5 text-center">
  <h1></h1>
  <p></p>
</div>

</body>
</html>