<?php
define('ROOT_PATH', dirname(__DIR__));
require_once ROOT_PATH . '../Database.php';

class CategoriaDAO
{
    private $conexao;

    function __construct()
    {
        $database = new Database();
        $this->conexao = $database->getConexao();
    }

    function store($categoria)
    {
        $stmt = $this->conexao->prepare("INSERT INTO categoria (nome) VALUES (:nome)");
        $stmt->bindValue(':nome', $categoria->getNome());
        return $stmt->execute();
    }


    function update($categoria)
    {
        $stmt = $this->conexao->prepare("UPDATE categoria SET (:nome) WHERE id = :id");
        $stmt->bindParam(':nome', $categoria->getNome());
        return $stmt->execute();
    }

    public function remove($id)
    {
        $stmt = $this->conexao->prepare("DELETE FROM categoria WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function list()
    {
        $stmt = $this->conexao->prepare("SELECT *  FROM categoria");
        $stmt->execute();
        $categorias = $stmt->fetchAll();
        return $categorias;
    }

    function buscarCategoria($id)
    {
        $stmt = $this->conexao->prepare("SELECT id FROM categoria");
        $stmt->execute();

        $categoriasArray = $stmt->fetchAll();

        while ($linha = $categoriasArray) {
            if ($linha["id"] == $id) {
                return true;
            }
        }

        return false;
    }
}
