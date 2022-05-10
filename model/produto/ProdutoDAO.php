<?php
require_once 'Database.php';

class ProdutoDAO
{
    private $conexao;

    function __construct()
    {
        $database = new Database();
        $this->conexao = $database->getConexao();
    }

    function store($produto)
    {
        $stmt = $this->conexao->prepare("INSERT INTO produtos (nome, descricao,	preco, caminho_imagem, categorias, quantidade, ncm) VALUES (nome = :nome, descricao = :descricao, preco = :preco, caminho_imagem = :caminho_imagem, categorias = :categorias, quantidade = :quantidade, ncm = :ncm)");
        $stmt->bindValue(':nome', $produto->getNome());
        $stmt->bindValue(':descricao', $produto->getDescricao());
        $stmt->bindValue(':categorias', $produto->getCategorias());
        $stmt->bindValue(':preco', $produto->getPreco());
        $stmt->bindValue(':caminho_imagem', $produto->getCaminho_imagem());
        $stmt->bindValue(':ncm', $produto->getNcm());
        $stmt->bindValue(':quantidade', $produto->getQuantidade());
        return $stmt->execute();
    }


    function update($produto) {
        $stmt = $this->conexao->prepare("UPDATE produtos SET (nome = :nome, descricao = :descricao, preco = :preco, caminho_imagem = :caminho_imagem, categorias = :categorias, quantidade = :quantidade, ncm = :ncm) WHERE id = :id");
        $stmt->bindParam(':nome', $produto->getNome());
        $stmt->bindParam('descricao', $produto->getDescricao());
        $stmt->bindParam('preco', $produto->getPreco());
        $stmt->bindParam('caminho_imagem', $produto->caminho_imagem());
        $stmt->bindParam('ncm', $produto->getNcm());
        $stmt->bindParam('quantidade', $produto->getQuantidade());
        $stmt->bindParam(':id', $produto->getId());
        return $stmt->execute();
    }

    public function remove($id) {
        $stmt = $this->conexao->prepare("DELETE FROM produto WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    function buscarProduto($id) {
        $stmt = $this->conexao->prepare("SELECT id FROM produto");
        $stmt->execute();
        
        $produtosArray = $stmt->fetchAll();

        while ($linha = $produtosArray) {
            if ($linha["id"] == $id) {
                return true;
            }
        }

        return false;
    }
}
