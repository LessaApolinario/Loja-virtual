<html>
<?php
if ($_REQUEST) {
    if ($_REQUEST['sucesso'] == true) {
        echo "Funcionario atualizado com sucesso";
    }
}
?>
<h1>Atualizar funcionário</h1>
<form action="../../index.php?classe=Funcionario&acao=update" method="POST">
    Nome: <input name="nome"><br>
    Usuário: <input name="usuario"><br>
    Senha: <input name="senha"><br>
    Tipo: <input name="tipo"><br>
    <input type="submit" />
</form>

</html>