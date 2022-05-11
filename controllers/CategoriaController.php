<?php
require_once './model/categoria/Categoria.php';
require_once './model/categoria/CategoriaDAO.php';

class CategoriaController
{
    private $categoria;
    private $categoriaDao;

    public function store()
    {
        $this->categoriaDao = new CategoriaDAO();
        $this->categoria = new Categoria();
        $this->categoria->setNome($_REQUEST['nome']);
        
        if ($this->categoriaDao->store($this->categoria)) {
            $_REQUEST['sucesso'] = true;
            require_once 'view/categoria/categoria.php';
        }
    }

    public function update()
    {
        $this->categoriaDao = new CategoriaDAO();
        $this->categoria = new Categoria();
        $this->categoria->setNome($_REQUEST["nome"]);

        // procurando por id
        $idProcurado = $_REQUEST['idProcurado'];

        $categoriaProcurada = $this->categoriaDao->buscarcategoria($idProcurado);

        if ($this->categoriaDao->update($this->categoria) && $categoriaProcurada) {
            $_REQUEST["sucesso"] = true;
            require_once 'view/categoria/atualizaCategoria.php';
        }
    }

    public function remove()
    {
        $this->categoriaDao = new CategoriaDAO();
        $idProcurado = $_REQUEST["idProcurado"];
        $categoriaProcurada = $this->categoriaDAO->buscarCategoria($idProcurado);

        if ($this->categoriaDAO->remove() && $categoriaProcurada) {
            $_REQUEST["sucesso"] = true;
            require_once 'view/categoria/removeCategoria.php';
        }
    }

    public function list()
    {
        $this->CategoriaDAO = new CategoriaDAO();
        $produtos = $this->CategoriaDAO->list();

        $_REQUEST["produtos"] = $produtos;

        require_once './view/produto/listar_produtos_view.php';
    }
}