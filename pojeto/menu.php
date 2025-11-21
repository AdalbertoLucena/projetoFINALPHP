<?php 
if (!isset($_SESSION)) session_start(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Navbar</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Hegarty&display=swap" rel="stylesheet">

  

<body class="bg-dark text-white">
  

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
  <div class="container-fluid position-relative">

    <a class="navbar-brand fs-3 fw-bold" href="#">Logo</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCenter">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse center-absolute" id="navbarCenter">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="carros.php">Ofertas</a></li>
        <li class="nav-item"><a class="nav-link" href="quemsomos.php">Quem somos</a></li>
        <li class="nav-item"><a class="nav-link" href="faleconosco.php">Fidelizar</a></li>
      </ul>
    </div>

    <div class="d-flex align-items-center">

      <?php 
      // USUÁRIO NÃO LOGADO → MOSTRA "CADASTRO"
      if (empty($_SESSION['usuario'])): ?>

          <a class="btn btn-outline-light fw-bold" href="cadastro_formulario.php">
            Cadastro
          </a>

      <?php 
      // USUÁRIO LOGADO → MOSTRA FOTO + BOTÃO SAIR
      else:  

          // FOTO EXISTE?
          if (!empty($_SESSION['foto']) && file_exists("img/" . $_SESSION['foto'])): ?>

              <a href="perfil.php">
                <img src="img/<?=$_SESSION['foto']?>" class="avatar-img">
              </a>

          <?php else: ?>

              <a href="perfil.php">
                <img src="img/padrao.png" class="avatar-img">
              </a>

          <?php endif; ?>

          <!-- BOTÃO SAIR -->
          <a href="logout.php" class="btn btn-danger ms-3 fw-bold">
            Sair
          </a>

      <?php endif; ?>

    </div>

  </div>
</nav>

<div class="container mt-5 pt-5">
</div>

</body>
</html>
