<!doctype html>
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

             
             <form method="POST" action="cadrastro.php">

                <div class="form-group">
                   <label for="nome">Nome Completo</label>
                   <input type="text" class="form-control" name="nome" require>
                </div>

                <div class="form-group">
                   <label for="endereco">Endereço</label>
                   <input type="text" class="form-control" name="endereco" require>
                </div>

                <div class="form-group">
                   <label for="telefone">Telefone</label>
                   <input type="text" class="form-control" name="telefone" require>
                </div>

                <div class="form-group">
                   <label for="email">Email</label>
                   <input type="email" class="form-control" name="email" require>
                </div>

                <div class="form-group">
                   <label for="data_nascimento">Data de Nascimento</label>
                   <input type="date" class="form-control" name="data_nascimento" require>
                </div>

                <div class="form-group">
                   <input type="submit" class="btn btn-success" value="Salvar">
                </div>

             </form>

          </div>
       </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
