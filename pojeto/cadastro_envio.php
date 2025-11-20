<?php
session_start();
include_once "cadastro_banco.php";
include_once "cadastro_banco.php";


$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];


$foto = $_FILES['foto'];
$nome_foto = mover_foto($foto);
if ($nome_foto == 0) {
    $nome_foto = null;
}


$sql = "INSERT INTO novos(nome, email, telefone, endereco, data_nascimento, foto) VALUES 
('$nome','$email','$telefone','$endereco','$data_nascimento','$nome_foto')";

if (mysqli_query($conn, $sql)) {

    $_SESSION['usuario'] = $nome;
    $_SESSION['foto']    = $nome_foto;
    $_SESSION['msg']     = "Cadastro realizado com sucesso!";

    header("Location: index.php");
    exit;

} else {

    $_SESSION['msg'] = "Erro ao cadastrar!";
    header("Location: index.php");
    exit;
}
?>
