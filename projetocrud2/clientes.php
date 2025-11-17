<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Cadastro</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
<h1>Cadastro</h1>
<form action="/submit" method="post"><br><br>

<label for="nome">Nome:</label>
<input type="text" id="nome" name="nome" required><br><br>


<label for="email">E-mail:</label>
<input type="email" id="email" name="email" required><br><br>


<label for="senha">Senha:</label>
<input type="password" id="senha" name="senha" required><br><br>


<label for="confirma-senha">Confirme a Senha:</label>
<input type="password" id="confirma-senha" name="confirma-senha" required><br><br>


<button type="submit">Cadastrar</button>
<button type="reset">Limpar</button>
</form>
</div>
</body>
</html>