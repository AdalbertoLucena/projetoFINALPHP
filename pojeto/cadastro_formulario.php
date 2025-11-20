<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-4">
<div class="row">
<div class="col-md-6">

<h1>Cadastro</h1>


<?php if(!empty($_GET["ok"])): ?>
    <div class="alert alert-success">
        Cadastro realizado com sucesso!
    </div>
<?php endif; ?>

<form method="POST" action="cadastro_envio.php" enctype="multipart/form-data">

    <div class="form-group">
       <label for="nome">Nome Completo</label>
       <input type="text" class="form-control" name="nome" required>
    </div>

    <div class="form-group">
       <label for="endereco">Endereço</label>
       <input type="text" class="form-control" name="endereco" required>
    </div>

    <div class="form-group">
       <label for="telefone">Telefone</label>
       <input type="text" class="form-control" name="telefone" required>
    </div>

    <div class="form-group">
       <label for="email">Email</label>
       <input type="email" class="form-control" name="email" required>
    </div>

    <div class="form-group">
       <label for="data_nascimento">Data de Nascimento</label>
       <input type="date" class="form-control" name="data_nascimento" required>
    </div>

    <div class="form-group">
       <label for="foto">Foto</label>
       <input type="file" class="form-control" name="foto" accept="image/*">
    </div>

    
    <?php if(empty($_GET["ok"])): ?>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Salvar">
        </div>
    <?php endif; ?>

</form>

</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
