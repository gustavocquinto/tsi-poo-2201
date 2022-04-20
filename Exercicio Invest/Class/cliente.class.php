<?php
include_once(__DIR__ . '/../Interfaces/crud.interface.php');
include_once(__DIR__ . '/../Database/conectaBD.php');

Class Cliente implements Crud {
    private int $id;
    private string $nome;
    private string $telefone;
    private Database $db;

    public function __construct(string $nome, string $telefone){
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->db = new Database();
        
    }

    public function criar():bool{
         $add = $this->db->dbh->prepare("INSERT INTO clientes (nome, telefone)
                                    VALUES (:nome, :telefone)");
        $cliente[':nome'] = $this->nome;
        $cliente[':telefone'] = $this->telefone;

        $add->execute($cliente);

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