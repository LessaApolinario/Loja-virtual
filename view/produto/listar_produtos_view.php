<?php
$produtos = $_REQUEST["produtos"];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>

<body>
    <table>
        <h2>Lista de produtos</h2>
        <tr>
            <th>nome</th>
            <th>descrição</th>
            <th>preço</th>
            <th>caminho_imagem</th>
            <th>categorias</th>
            <th>quantidade</th>
            <th>ncm</th>
        </tr>
        <?php foreach ($clientes as $cliente) : ?>
            <tr>
                <td><?php $cliente["nome"] ?></td>
                <td><?php $cliente["descricao"] ?></td>
                <td><?php $cliente["preco"] ?></td>
                <td><?php $cliente["caminho_imagem"] ?></td>
                <td><?php $cliente["categorias"] ?></td>
                <td><?php $cliente["quantidade"] ?></td>
                <td><?php $cliente["ncm"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>