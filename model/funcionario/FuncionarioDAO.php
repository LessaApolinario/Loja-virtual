<?php
define('ROOT_PATH', dirname(__DIR__));
require_once ROOT_PATH . '../Database.php';

class FuncionarioDAO
{
    private $conexao;

    function __construct()
    {
        $database = new Database();
        $this->conexao = $database->getConexao();
    }

    function store($funcionario)
    {
        $stmt = $this->conexao->prepare("INSERT INTO funcionario (nome, usuario, senha, tipo) VALUES (:nome, :usuario, :senha, :tipo)");
        $stmt->bindValue(':nome', $funcionario->getNome());
        $stmt->bindValue(':usuario', $funcionario->getUsuario());
        $stmt->bindValue(':senha', $funcionario->getSenha());
        $stmt->bindValue(':tipo', $funcionario->getTipo());
        return $stmt->execute();
    }


    function update($funcionario)
    {
        $stmt = $this->conexao->prepare("UPDATE funcionario SET (:nome, :usuario, :senha, :tipo) WHERE id = :id");
        $stmt->bindValue(':nome', $funcionario->getNome());
        $stmt->bindValue(':usuario', $funcionario->getUsuario());
        $stmt->bindValue(':senha', $funcionario->getSenha());
        $stmt->bindValue(':tipo', $funcionario->getTipo());
        return $stmt->execute();
    }

    public function remove($id)
    {
        $stmt = $this->conexao->prepare("DELETE FROM funcionario WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function list()
    {
        $stmt = $this->conexao->prepare("SELECT *  FROM funcionario");
        $stmt->execute();
        $funcionarios = $stmt->fetchAll();
        return $funcionarios;
    }

    function buscarfuncionario($id)
    {
        $stmt = $this->conexao->prepare("SELECT id FROM funcionario");
        $stmt->execute();

        $funcionariosArray = $stmt->fetchAll();

        while ($linha = $funcionariosArray) {
            if ($linha["id"] == $id) {
                return true;
            }
        }

        return false;
    }
}
