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

$modelo = isset($_REQUEST['modelo']) ? urldecode($_REQUEST['modelo']) : 'Veículo';
$diaria = isset($_REQUEST['diaria']) ? floatval(str_replace(',', '.', $_REQUEST['diaria'])) : 0;
$dias = 1;
$total = null;

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
</head>
<body>
  <main class="car-page">
    <div class="card">
      <h1 class="car-title">Reserva: <?php echo htmlspecialchars($modelo); ?></h1>

      <div class="description">
        <p>Diária: <strong><?php echo fmtBR($diaria); ?></strong></p>
      </div>

      <?php if ($total === null): ?>
        <form method="post" action="reserva.php" style="max-width:420px;margin:0 auto;text-align:left;">
          <input type="hidden" name="modelo" value="<?php echo htmlspecialchars($modelo); ?>">
          <input type="hidden" name="diaria" value="<?php echo htmlspecialchars($diaria); ?>">

          <label for="dias">Quantidade de diárias</label>
          <input id="dias" name="dias" type="number" min="1" value="1" style="width:100%;padding:0.6rem;margin:0.25rem 0 0.9rem;border-radius:6px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit">

          <button class="btn btn-primary" type="submit" style="width:100%;">Calcular total</button>
        </form>
      <?php else: ?>
        <div class="description" style="text-align:center;">
          <p>Diárias: <strong><?php echo $dias; ?></strong></p>
          <p>Total a pagar: <strong style="font-size:1.4rem; color:#fff"><?php echo fmtBR($total); ?></strong></p>
        </div>
        <div style="display:flex;gap:0.75rem;justify-content:center;margin-top:1rem;">
          <a href="hyundai.php" class="btn" style="background:transparent;border:1px solid rgba(255,255,255,0.06);color:#fff;padding:0.8rem 1.2rem;border-radius:8px;">Voltar</a>
          <a href="#" class="btn btn-primary" style="padding:0.8rem 1.2rem;border-radius:8px;">Finalizar Reserva</a>
        </div>
      <?php endif; ?>

    </div>
  </main>
</body>
</html>
