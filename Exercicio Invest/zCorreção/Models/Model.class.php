<?php 

abstract class Model extends PDO {
    protected string $tabela;
    public function __construct(){
        include_once '../config/db.php';
        parent::__construct(DSN, DB_USER);
    }

    abstract function inserir(array $dados):?int;
    abstract function atualizar(int $id, array $dados):bool;
    abstract function apagar(int $id):bool;
    abstract function listar(int $id = null):?array;
}