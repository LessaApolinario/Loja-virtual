<?php
if ($_REQUEST) {
    $produtos = $_REQUEST["produtos"];
}
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
        <?php foreach ($produtos as $produto) : ?>
            <tr>
                <td><?php $produto["nome"] ?></td>
                <td><?php $produto["descricao"] ?></td>
                <td><?php $produto["preco"] ?></td>
                <td><?php $produto["caminho_imagem"] ?></td>
                <td><?php $produto["categorias"] ?></td>
                <td><?php $produto["quantidade"] ?></td>
                <td><?php $produto["ncm"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>