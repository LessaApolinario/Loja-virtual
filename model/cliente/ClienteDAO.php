<?php
define('ROOT_PATH', dirname(__DIR__));
require_once ROOT_PATH . '../Database.php';

class ClienteDAO
{
    private $conexao;

    function __construct()
    {
        $database = new Database();
        $this->conexao = $database->getConexao();
    }

    function store($cliente)
    {
        $stmt = $this->conexao->prepare("INSERT INTO cliente (nome, cpf, senha) VALUES (:nome, :cpf, :senha)");
        $stmt->bindValue(':nome', $cliente->getNome());
        $stmt->bindValue(':cpf', $cliente->getCpf());
        $stmt->bindValue(':senha', $cliente->getSenha());
        return $stmt->execute();
    }


    function update($cliente)
    {
        $stmt = $this->conexao->prepare("UPDATE cliente SET (:nome, :cpf, :senha) WHERE id = :id");
        $stmt->bindParam(':nome', $cliente->getNome());
        $stmt->bindParam(':cpf', $cliente->getCpf());
        $stmt->bindParam(':senha', $cliente->getSenha());
        return $stmt->execute();
    }

    public function remove($id)
    {
        $stmt = $this->conexao->prepare("DELETE FROM cliente WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function list()
    {
        $stmt = $this->conexao->prepare("SELECT *  FROM cliente");
        $stmt->execute();
        $clientes = $stmt->fetchAll();
        return $clientes;
    }

    function buscarcliente($id)
    {
        $stmt = $this->conexao->prepare("SELECT id FROM cliente");
        $stmt->execute();

        $clientesArray = $stmt->fetchAll();

        while ($linha = $clientesArray) {
            if ($linha["id"] == $id) {
                return true;
            }
        }

        return false;
    }
}
