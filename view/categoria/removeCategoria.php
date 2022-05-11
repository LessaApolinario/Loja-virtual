<html>
<?php
if ($_REQUEST) {
    if ($_REQUEST['sucesso'] == true) {
        echo "Categoria removida com sucesso";
    }
}
?>
<h1>Remover produto</h1>
<form action="../../index.php?classe=Categoria&acao=remove" method="POST">
    <label for="remover">Remover</label>
    <input type="submit" id="remover" />
</form>

</html>