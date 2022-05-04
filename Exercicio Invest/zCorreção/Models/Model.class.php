<?php 

abstract class Model extends PDO {
    protected string $tabela;
    public function __construct(){
        include_once '../config/db.php';
        parent::__construct(DSN, DB_USER);
    }

    abstract function inserir(array $dados):?int;
    abstract function atualizar(int $id, array $dados):bool;   
    abstract function listar(int $id = null):?array;
    function apagar(int $id):bool{
        $stmt = $this->prepare("DELETE FROM clientes WHERE id = :id");
      $stmt->bindParam(':id', $id);

      if($stmt->execute()){
          echo "APAGADO COM SUCESSO";
          return true;
      }
      else{
          echo "erro";
          return false;
      }
    }
}