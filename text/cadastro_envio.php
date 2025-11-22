<?php
session_start();
include_once "cadastro_banco.php";
include_once "cadastro_banco.php"; // você colocou 2x, deixei assim como pediu


// PEGAR DADOS DO FORMULÁRIO
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha']; // <-- PEGAR A SENHA DO FORMULÁRIO
$data_nascimento = $_POST['data_nascimento'];


// FOTO
$foto = $_FILES['foto'];
$nome_foto = mover_foto($foto);
if ($nome_foto == 0) {
    $nome_foto = null;
}


// 🔒 CRIPTOGRAFAR SENHA ANTES DE SALVAR
$senha_segura = password_hash($senha, PASSWORD_DEFAULT);


// SQL ATUALIZADO COM CAMPO "senha"
$sql = "INSERT INTO novos(nome, email, telefone, endereco, data_nascimento, foto, senha) 
        VALUES ('$nome','$email','$telefone','$endereco','$data_nascimento','$nome_foto', '$senha_segura')";


// VERIFICAR SE DEU CERTO
if (mysqli_query($conn, $sql)) {

    // CRIAR SESSÃO DO USUÁRIO
    $_SESSION['usuario'] = $nome;
    $_SESSION['foto']    = $nome_foto;
    $_SESSION['id']      = mysqli_insert_id($conn); // <-- ID DO USUÁRIO
    $_SESSION['msg']     = "Cadastro realizado com sucesso!";

    header("Location: index.php");
    exit;

} else {

    $_SESSION['msg'] = "Erro ao cadastrar!";
    header("Location: index.php");
    exit;
}
?>

