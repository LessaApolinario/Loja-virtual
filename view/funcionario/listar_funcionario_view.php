<?php
if ($_REQUEST) {
    $funcionarios = $_REQUEST["funcionarios"];
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionarios</title>
</head>

<body>
    <table>
        <h2>Lista de funcionarios</h2>
        <tr>
            <th>nome</th>
            <th>usuario</th>
            <th>senha</th>
            <th>tipo</th>
        </tr>
        <?php foreach ($funcionarios as $funcionario) : ?>
            <tr>
                <td><?php $funcionario["nome"] ?></td>
                <td><?php $funcionario["usuario"] ?></td>
                <td><?php $funcionario["senha"] ?></td>
                <td><?php $funcionario["tipo"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>