<?php
if ($_REQUEST) {
    $categorias = $_REQUEST["categorias"];
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>

<body>
    <table>
        <h2>Lista de categorias</h2>
        <tr>
            <th>nome</th>
        </tr>
        <?php foreach ($categorias as $categoria) : ?>
            <tr>
                <td><?php $categoria["nome"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>