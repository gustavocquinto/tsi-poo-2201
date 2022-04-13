<?php
include_once('../Interfaces/crud.interface.php');
Class Investimento implements CRUD {
    private $idAtivos;

    public function __construct(int $idAtivos){
        $this->idAtivos = $idAtivos;
    }
    public function criar():bool{

    };

    public function editar(int $id):bool{

    };

    public function listar(?int $id):?bool{

    };

    public function deletar(int $id):bool{

    };
}