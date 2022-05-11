<html>
<?php
if ($_REQUEST) {
    if ($_REQUEST['sucesso'] == true) {
        echo "Categoria inserida com sucesso";
    }
}
?>
<h1>Cadastrar Categoria</h1>
<form action="../../index.php?classe=Categoria&acao=store" method="POST">
    Nome: <input name="nome"><br>
    <input type="submit" />
</form>

</html>