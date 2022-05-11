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
    <label>Remover</label>
    <input type="text" name="idProcurado">
    <input type="submit" />
</form>

</html>