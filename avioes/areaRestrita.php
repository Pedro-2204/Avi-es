<?php
    $acao = 'recuperar';
    require 'aviao.controller.php';

?>

<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Restrita</title>
</head>
<body>
    <h1>Avião</h1>
    <table>
        <tr>
            <th>Nome: </th>
            <th>Alterar: </th>
            <th>Excluir: </th>
        </tr>
        <?php foreach($aviao as $indice =>$aviao) {?>
        <tr>
            <th><?= $aviao->nome;?></th>
            <th><a href="index.php?metodo=alterar&id=<?= $aviao->id;?>">Alterar </a></th>
            <th><a href="index.php?metodo=remover&id=<?= $aviao->id;?>">Remover </a></th>
        </tr>
        <?php }?>
    </table>
</body>
</html>