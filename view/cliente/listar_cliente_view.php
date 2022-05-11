<?php
if ($_REQUEST) {
    $clientes = $_REQUEST["clientes"];
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>

<body>
    <table>
        <h2>Lista de clientes</h2>
        <tr>
            <th>nome</th>
            <th>cpf</th>
            <th>senha</th>
        </tr>
        <?php foreach ($clientes as $cliente) : ?>
            <tr>
                <td><?php $cliente["nome"] ?></td>
                <td><?php $cliente["cpf"] ?></td>
                <td><?php $cliente["senha"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>