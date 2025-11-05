<?php

require_once "admin/config.inc.php";
include('topo.php'); 
include('menu.php'); 

    $sql = "SELECT * FROM pratos";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){

    echo "<h1>Pratos</h1>";
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
    </r>
    </thead>
    <tbody>
    <?php
        while($dados = mysqli_fetch_array($resultado)){
    ?>
     <tr>
    <td><?= $dados['nome'] ?></td>
    <td><?= $dados['descricao'] ?></td>
    <td><?= $dados['preco'] ?></td>
    <td>
        <a href="admin/pratos-alterar.php?id=<?= $dados['id'] ?>">Alterar</a>
        
<a href="admin/pratos-excluir.php?id=<?= $dados['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir este prato?')">Excluir</a>

    </td>
</tr>

    <?php
        include('rodape.php'); }
    ?>
    </tbody>
</table>
<?php
    }else{
        echo "<h2>Nenhum Prato cadastrado no momento.</h2>";
  }
