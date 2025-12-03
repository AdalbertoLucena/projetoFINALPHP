<?php/*
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../cadastro_formulario.php");
    exit;
}*/
?>

<?php
function fmtBR($n){
    return 'R$ '.number_format((float)$n, 2, ',', '.');
}
//
<!-- Recebe os dados do formulario -->
$modelo = isset($_REQUEST['modelo']) ? urldecode($_REQUEST['modelo']) : 'Veículo';
$diaria = isset($_REQUEST['diaria']) ? floatval(str_replace(',', '.', $_REQUEST['diaria'])) : 0;
$dias = 1;
$total = null;


<!-- Se o formulário foi enviado calcula o total -->
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $modelo = $_POST['modelo'] ?? $modelo;
    $diaria = floatval(str_replace(',', '.', $_POST['diaria'] ?? $diaria));
    $dias = max(1, intval($_POST['dias'] ?? 1));
    $total = $diaria * $dias;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Reserva - <?php echo htmlspecialchars($modelo); ?></title>
  <link rel="stylesheet" href="hyundai.css">
  <link rel="stylesheet" href="reserva.css">
</head>

<body>
  <main class="car-page">
    <div class="card">
      <h1 class="car-title">Reserva: <?php echo htmlspecialchars($modelo); ?></h1>

      <!-- Mostra o preço da diária -->
      <div class="description">
        <p>Diária: <strong><?php echo fmtBR($diaria); ?></strong></p>
      </div>

      <!-- Verifica se já existe um total calculado-->
      <?php if ($total === null): ?>

        <!-- se nao tem total mostra o formulario -->
        <form method="post" action="reserva.php">

        <!-- Campos ocultos para manter os dados do modelo e diaria -->
          <input type="hidden" name="modelo" value="<?php echo htmlspecialchars($modelo); ?>">
          <input type="hidden" name="diaria" value="<?php echo htmlspecialchars($diaria); ?>">

          <!--informar a quantidade de diarias -->
          <label for="dias">Quantidade de diárias</label>
          <input id="dias" name="dias" type="number" min="1" value="1">

          <!-- Botão para calcular o total -->
          <button class="btn btn-primary" type="submit">Calcular total</button>
        </form>

        <!-- Se ja tem total mostra o resumo da reserva -->
      <?php else: ?>
        <div class="description">
          <p>Diárias: <strong><?php echo $dias; ?></strong></p>
          <p>Total a pagar: <strong><?php echo fmtBR($total); ?></strong></p>
        </div>

        <!-- Botoes para voltar  finalizar -->
        <div class="botoes-container">
          <a href="hyundai.php" class="btn">Voltar</a>
          <a href="../confirmacao.php" class="btn btn-primary">Finalizar Reserva</a>
        </div>
      <?php endif; ?>

    </div>
  </main>
</body>
</html>