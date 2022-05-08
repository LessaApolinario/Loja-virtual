<?php
class Produto
{
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $caminho_imagem;
    private $categorias;
    private $quantidade;
    private $ncm;

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getNcm()
    {
        return $this->ncm;
    }

    public function setNcm($ncm)
    {
        $this->ncm = $ncm;
    }

    public function getCaminho_imagem()
    {
        return $this->caminho_imagem;
    }

    public function setCaminho_imagem($caminho_imagem)
    {
        $this->caminho_imagem = $caminho_imagem;
    }

    public function getCategorias()
    {
        return $this->categorias;
    }

    public function setCategorias($categorias)
    {
        $this->categorias = $categorias;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }
}
