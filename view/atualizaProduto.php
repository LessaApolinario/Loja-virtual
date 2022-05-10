<html>
<?php
if ($_REQUEST) {
    if ($_REQUEST['sucesso'] == true) {
        echo "Produto atualizado com sucesso";
    }
}
?>
<h1>Atualizar Produto</h1>
<form action="../index.php?classe=Produto&acao=update" method="POST">
    Nome: <input name="nome"></input><br>
    Descrição: <input name="descricao"></input><br>
    Categorias: <input name="categorias"></input><br>
    Quantidade: <input name="quantidade"></input><br>
    Preço: <input name="preco"></input><br>
    NCM: <input name="ncm"></input><br>
    Imagem: <input name="caminho_imagem"></input><br>
    id: <input name="idProcurado"><br>
    <input type="submit" />
</form>

</html>