<?php

/*
Dados da conexão com o banco Aqui você define:
Servidor do banco → localhost
Nome do banco de dados → clientes
Usuário → root
Senha → vazia   
*/
$server = "localhost";
$bancodedados = "clientes";
$usuario = "root";
$senha = "";


/* Esse bloquinho tenta conectar ao MySQL usando os dados acima.*/
$conn = mysqli_connect($server, $usuario, $senha, $bancodedados);
if (!$conn) {
    die("Erro na conexão com o banco!");
} 


/*Essa função recebe uma imagem enviada através de um formulário HTML*/ 
function mover_foto($vetor_foto) {

    /*Verifica se existe erro, se tiver , retorna nulo */
    if ($vetor_foto['error'] != 0 || $vetor_foto['size'] == 0) return null;

    /*esse bloquinho verifica se o que foi enviado realmente é uma imagem*/ 
    $tipoCompleto = $vetor_foto['type'];
    $partes = explode("/", $tipoCompleto);
    if ($partes[0] != "image") return null;


/*Faz a criptodrafia da foto único, ex: 20250318094521_8374.jpg*/ 
    $nome_arquivo = date('YmdHis') . "_" . rand(1000, 9999) . ".jpg";


/*Cria a pasta img/ se não existir*/
    if (!is_dir("img")) mkdir("img", 0777, true);

    /*move a foto enviada para essa pasta img */
    if (move_uploaded_file($vetor_foto['tmp_name'], "img/" . $nome_arquivo)) {
        return "img/" . $nome_arquivo;
    }
    return null;
}
?>
