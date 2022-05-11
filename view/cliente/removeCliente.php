<html>
<?php
if ($_REQUEST) {
    if ($_REQUEST['sucesso'] == true) {
        echo "Cliente removido com sucesso";
    }
}
?>
<h1>Remover cliente</h1>
<form action="../../index.php?classe=Cliente&acao=remove" method="POST">
    <label for="remover">Remover</label>
    <input type="submit" id="remover" />
</form>

</html>