<html>
<?php
if ($_REQUEST) {
    if ($_REQUEST['sucesso'] == true) {
        echo "Funcionario removido com sucesso";
    }
}
?>
<h1>Remover funcionario</h1>
<form action="../../index.php?classe=Funcionario&acao=remove" method="POST">
    <label>Remover</label>
    <input type="text" name="idProcurado">
    <input type="submit" />
</form>

</html>