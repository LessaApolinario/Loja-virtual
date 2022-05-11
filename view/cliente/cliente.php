<html>
<?php
if ($_REQUEST) {
    if ($_REQUEST['sucesso'] == true) {
        echo "Cliente inserido com sucesso";
    }
}
?>
<h1>Cadastrar cliente</h1>
<form action="../../index.php?classe=Cliente&acao=store" method="POST">
    Nome: <input name="nome"><br>
    CPF: <input name="cpf"><br>
    Senha: <input name="senha"><br>
    <input type="submit" />
</form>

</html>