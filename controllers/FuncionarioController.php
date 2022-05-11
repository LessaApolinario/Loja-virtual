<?php
require_once './model/funcionario/Funcionario.php';
require_once './model/funcionario/FuncionarioDAO.php';

class FuncionarioController
{
    private $funcionario;
    private $funcionarioDao;

    public function store()
    {
        $this->funcionarioDao = new FuncionarioDAO();
        $this->funcionario = new Funcionario();
        $this->funcionario->setNome($_REQUEST['nome']);
        $this->funcionario->setUsuario($_REQUEST['usuario']);
        $this->funcionario->setSenha($_REQUEST['senha']);
        $this->funcionario->setTipo($_REQUEST['tipo']);
        
        if ($this->funcionarioDao->store($this->funcionario)) {
            $_REQUEST['sucesso'] = true;
            require_once 'view/funcionario/funcionario.php';
        }
    }

    public function update()
    {
        $this->funcionarioDao = new funcionarioDAO();
        $this->funcionario = new funcionario();
        $this->funcionario->setNome($_REQUEST['nome']);
        $this->funcionario->setUsuario($_REQUEST['usuario']);
        $this->funcionario->setSenha($_REQUEST['senha']);
        $this->funcionario->setTipo($_REQUEST['tipo']);

        // procurando por id
        $idProcurado = $_REQUEST['idProcurado'];

        $funcionarioProcurado = $this->funcionarioDao->buscarFuncionario($idProcurado);

        if ($this->funcionarioDao->update($this->funcionario) && $funcionarioProcurado) {
            $_REQUEST["sucesso"] = true;
            require_once 'view/funcionario/atualizafuncionario.php';
        }
    }

    public function remove()
    {
        $this->funcionarioDao = new FuncionarioDAO();
        $idProcurado = $_REQUEST["idProcurado"];
        $funcionarioProcurado = $this->funcionarioDAO->buscarFuncionario($idProcurado);

        if ($this->funcionarioDAO->remove() && $funcionarioProcurado) {
            $_REQUEST["sucesso"] = true;
            require_once 'view/funcionario/removefuncionario.php';
        }
    }

    public function list()
    {
        $this->funcionarioDAO = new FuncionarioDAO();
        $funcionarios = $this->funcionarioDAO->list();

        $_REQUEST["funcionarios"] = $funcionarios;

        require_once './view/produto/listar_funcionario_view.php';
    }
}
