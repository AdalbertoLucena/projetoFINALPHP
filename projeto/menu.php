<?php 
if (!isset($_SESSION)) session_start(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Navbar</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">

  
  <link rel="stylesheet" href="menu-styles.css">

  <style>
    body, .navbar, .nav-link, .navbar-brand, button {
      font-family: 'Raleway', sans-serif;
    }
    .avatar-img { 
      width: 40px; 
      height: 40px; 
      border-radius: 50%; 
      object-fit: cover; 
    }
  </style>
</head>

<body class="bg-dark text-white">

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
  <div class="container-fluid position-relative">

    <a class="navbar-brand fs-3 fw-bold" href="#">UNICAR</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCenter">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse center-absolute" id="navbarCenter">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="carros.php">Ofertas</a></li>
        <li class="nav-item"><a class="nav-link" href="quemsomos.php">Quem somos</a></li>
        <li class="nav-item"><a class="nav-link" href="faleconosco.php">Fale Conosco</a></li>
      </ul>
    </div>

    <div class="d-flex align-items-center">

      <?php 
      // SE NÃO ESTÁ LOGADO MOSTRA BOTÃO CADASTRO
      if (!isset($_SESSION['usuario_id'])): ?>

          <a class="btn btn-outline-light fw-bold" href="../cadastro/cadastro_log.php">
            Cadastro
          </a>

      <?php else:  
          // Caminho relativo à página que renderiza o menu
          $pasta_fotos = "../cadastro/img/";

          // Verifica se existe a foto do usuário
          if (!empty($_SESSION['foto']) && file_exists($pasta_fotos . $_SESSION['foto'])) {
              $foto_html = $pasta_fotos . $_SESSION['foto'];
          } else {
              $foto_html = $pasta_fotos . "padrao.png"; // imagem padrão
          }
      ?>

          <a href="perfil.php">
            <img src="<?= $foto_html ?>" class="avatar-img" alt="Foto do usuário">
          </a>
          <a href="logout.php" class="btn btn-danger ms-3 fw-bold">Sair</a>

      <?php endif; ?>

    </div>

  </div>
</nav>

<div class="container mt-5 pt-5">
</div>

</body>
</html>
