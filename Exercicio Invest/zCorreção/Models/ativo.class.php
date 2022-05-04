<?php 

require __DIR__ . '/Model.class.php';

class Ativo extends Model{
    public function __construct(){
        $this->tabela = 'ativos';
        parent::__construct(); // chama o construtor da classe pai
    }
    function inserir(array $dados):?int{
      $stmt = $this->prepare("INSERT INTO {$this->tabela} (id, nome) VALUES (:id, :nome)");
      $stmt->bindParam(':id', $dados['id']);
      $stmt->bindParam(':nome', $dados['nome']);

        if($stmt->execute()){
             echo $this->lastInsertId();
       }
        return null;
     }
     function atualizar(int $id, array $dados):bool{
         $stmt = $this->prepare("UPDATE {$this->tabela} 
                                 SET
                                 id = :id, nome = :nome
                                 WHERE
                                 id = :id");

         $stmt->bindParam(':id', $id);
         $stmt->bindParam(':nome', $dados['nome']);

         $stmt->execute();
         if($stmt->rowCount() > 0){
         return true;
         }
         else{
         return false;
         }
     }
     function listar(int $id = null):?array{
        if($id){
            $stmt = $this->prepare("SELECT id, nome FROM {$this->tabela}");
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            return $resultado;
        }
        else{
           $stmt = $this->prepare("SELECT id, nome FROM {$this->tabela}");
            $stmt = $this->execute();
            $resultado = $stmt->fetchAll();
            return $resultado;
        }
     }
}

$ativos = new Ativo;

//$ativos->inserir(['id' => 4, 'nome' => 'IPI14']);