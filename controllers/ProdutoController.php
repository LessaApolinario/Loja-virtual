<?php
require_once './model/produto/Produto.php';
require_once './model/produto/ProdutoDAO.php';

class ProdutoController
{
    private $produto;
    private $produtoDao;

    public function store()
    {
        $this->produtoDao = new ProdutoDAO();
        $this->produto = new Produto();
        $this->produto->setNome($_REQUEST['nome']);
        $this->produto->setCaminho_imagem($_REQUEST['caminho_imagem']);
        $this->produto->setDescricao($_REQUEST['descricao']);
        $this->produto->setQuantidade($_REQUEST['quantidade']);
        $this->produto->setPreco($_REQUEST['preco']);
        $this->produto->setCategorias($_REQUEST['categorias']);
        $this->produto->setNcm($_REQUEST['ncm']);

        if ($this->produtoDao->store($this->produto)) {
            $_REQUEST['sucesso'] = true;
            require_once 'view/produto/produto.php';
        }
    }

    public function update()
    {
        $this->produtoDao = new ProdutoDAO();
        $this->produto = new Produto();
        $this->produto->setNome($_REQUEST["nome"]);
        $this->produto->setCaminho_imagem($_REQUEST['caminho_imagem']);
        $this->produto->setDescricao($_REQUEST['descricao']);
        $this->produto->setQuantidade($_REQUEST['quantidade']);
        $this->produto->setPreco($_REQUEST['preco']);
        $this->produto->setCategorias($_REQUEST['categorias']);
        $this->produto->setNcm($_REQUEST['ncm']);

        // procurando por id
        $idProcurado = $_REQUEST['idProcurado'];

        $produtoProcurado = $this->produtoDao->buscarProduto($idProcurado);

        if ($this->produtoDao->update($this->produto) && $produtoProcurado) {
            $_REQUEST["sucesso"] = true;
            require_once 'view/produto/atualizaProduto.php';
        }
    }

    public function remove()
    {
        $this->produtoDao = new ProdutoDAO();
        $idProcurado = $_REQUEST["idProcurado"];
        $produtoProcurado = $this->produtoDao->buscarProduto($idProcurado);

        if ($this->produtoDAO->remove() && $produtoProcurado) {
            $_REQUEST["sucesso"] = true;
            require_once 'view/produto/removeProduto.php';
        }
    }

    public function list()
    {
        $this->produtoDao = new ProdutoDAO();
        $produtos = $this->produtoDao->list();

        $_REQUEST["produtos"] = array($produtos);
        
        require_once './view/produto/listar_produtos_view.php';
    }
}
