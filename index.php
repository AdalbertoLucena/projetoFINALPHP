<?php
session_start();

include_once "topo.php";
include_once "menu.php";

if (isset($_SESSION['msg'])) {
    echo "<div class='alert alert-success text-center'>".$_SESSION['msg']."</div>";
    unset($_SESSION['msg']);
}


if (empty($_SERVER["QUERY_STRING"])) {
    include_once "conteudo.php";
} else {
   
    $pg = isset($_GET['pg']) ? basename($_GET['pg']) : '';

    if (empty($pg)) {
  
        include_once "conteudo.php";
    } else {
       
        $arquivo = $pg . ".php";
        if (file_exists($arquivo)) {
            include_once $arquivo;
        } else {
           
            include_once "conteudo.php";
        }
    }
}

include_once "rodape.php";
?>
