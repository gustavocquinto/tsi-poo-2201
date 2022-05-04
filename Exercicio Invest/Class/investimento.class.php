<?php
include_once('../Interfaces/crud.interface.php');
Class Investimento implements CRUD {

    public function criar(int $idAtivos):bool{
        $add = $this->db->dbh->prepare("INSERT INTO investimento (nome, telefone)
                                    VALUES (:nome, :telefone)");
        $cliente[':nome'] = $this->nome;
        $cliente[':telefone'] = $this->telefone;

        $add->execute($cliente);

        return true;
    };

    public function editar(int $id):bool{

    };

    public function listar(?int $id):?bool{

    };

    public function deletar(int $id):bool{

    };
}