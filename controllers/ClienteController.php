<?php
require_once './model/cliente/Cliente.php';
require_once './model/cliente/ClienteDAO.php';

class ClienteController
{
    private $cliente;
    private $clienteDao;

    public function store()
    {
        $this->clienteDao = new ClienteDAO();
        $this->cliente = new Cliente();
        $this->cliente->setNome($_REQUEST['nome']);
        $this->cliente->setCpf($_REQUEST['cpf']);
        $this->cliente->setSenha($_REQUEST['senha']);
        
        if ($this->clienteDao->store($this->cliente)) {
            $_REQUEST['sucesso'] = true;
            require_once 'view/cliente/cliente.php';
        }
    }

    public function update()
    {
        $this->clienteDao = new ClienteDAO();
        $this->cliente = new Cliente();
        $this->cliente->setNome($_REQUEST["nome"]);
        $this->cliente->setCpf($_REQUEST["cpf"]);
        $this->cliente->setSenha($_REQUEST["senha"]);

        // procurando por id
        $idProcurado = $_REQUEST['idProcurado'];

        $clienteProcurado = $this->clienteDao->buscarcliente($idProcurado);

        if ($this->clienteDao->update($this->cliente) && $clienteProcurado) {
            $_REQUEST["sucesso"] = true;
            require_once 'view/cliente/atualizaCliente.php';
        }
    }

    public function remove()
    {
        $this->clienteDao = new ClienteDAO();
        $idProcurado = $_REQUEST["idProcurado"];
        $clienteProcurado = $this->clienteDAO->buscarCliente($idProcurado);

        if ($this->clienteDAO->remove() && $clienteProcurado) {
            $_REQUEST["sucesso"] = true;
            require_once 'view/cliente/removeCliente.php';
        }
    }

    public function list()
    {
        $this->clienteDAO = new ClienteDAO();
        $clientes = $this->clienteDAO->list();

        $_REQUEST["clientes"] = $clientes;

        require_once './view/cliente/listar_cliente_view.php';
    }
}
