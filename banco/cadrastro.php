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
         <?php
         include "banco.php";

         $nome = $_POST['nome'];
         $endereco = $_POST['endereco'];
         $telefone = $_POST['telefone'];
         $email = $_POST['email'];
         $data_nascimento = $_POST['data_nascimento'];

         $sql = "INSERT INTO novos(nome, email, telefone, endereco, data_nascimento) VALUES 
         ('$nome','$email','$telefone','$endereco','$data_nascimento')";

        if ( mysqli_query($conn, $sql)) {
           mensagem ("$nome cadastrado com sucesso",'success');
        } else
           mensagem ("$nome não foi cadrastado",'danger');
            echo mysqli_error($conn);
   
         ?>
         <a href="index.php" class="btn btn-primary">Voltar</a>
       </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>