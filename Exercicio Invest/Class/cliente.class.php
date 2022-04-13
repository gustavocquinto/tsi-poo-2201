<?php
include_once ('../Interfaces/crud.interface.php');

Class Cliente implements Crud {
    private int $id;
    private string $nome;
    private string $telefone;

    public function __construct(string $nome, string $telefone){
        $this->nome = $nome;
        $this->telefone = $telefone;
    }

    public function criar():bool{
        $sql = "INSERT INTO clientes (nome, telefone)
                VALUES (${$this->nome}, ${$this->telefone})";
        return true;
    }
    public function listar(?int $id):bool{
        $sql = "SELECT * FROM clientes";
        return true;
    }
    public function editar(int $id):bool{

        return true;
    }
    public function deletar(int $id):bool{
        return true;
    }

    public function investimentoTotal():float{
        return true;
    }

}