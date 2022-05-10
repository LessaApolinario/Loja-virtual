<html>
<?php
if ($_REQUEST) {
    if ($_REQUEST['sucesso'] == true) {
        echo "Produto inserido com sucesso";
    }
}
?>
<h1>Remover produto</h1>
<form action="../../index.php?classe=Produto&acao=remove" method="POST">
    <label for="remover">Remover</label>
    <input type="submit" id="remover" />
</form>

</html>