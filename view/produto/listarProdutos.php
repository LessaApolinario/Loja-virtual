<?php
if ($_REQUEST) {
    $produtos = $_REQUEST["produtos"];

    foreach ($produtos as $produto) {
        $html = "
            <div class='produto'>
                <p>" . $produto['nome'] . "</p>
                <div>" . $produto['descricao'] . "</div>
                <p>" . $produto['preco'] . "</p>
                <p>" . $produto['caminho_imagem'] . "</p>
                <p>" . $produto['categoria'] . "</p>
                <p>" . $produto['quantidade'] . "</p>
                <p>" . $produto['ncm'] . "</p>
            </div>
        ";

        echo $html;
    }
}
?>
<html>

<body>
    <form action="../../index.php?classe=Produto&acao=list" method="POST">
        <label for="listar">Produtos</label>
        <input type="submit" id="listar" />
    </form>
</body>

</html>