<html>
<?php
if ($_REQUEST) {
    if ($_REQUEST['sucesso'] == true) {
        echo "Categoria atualizada com sucesso";
    }
}
?>
<h1>Atualizar Categoria</h1>
<form action="../../index.php?classe=Categoria&acao=update" method="POST">
    Nome: <input name="nome"><br>
    <input type="submit" />
</form>

</html>