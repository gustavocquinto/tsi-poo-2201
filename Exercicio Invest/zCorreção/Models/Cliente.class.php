<?php 

require __DIR__ . '/Model.class.php';

class Cliente extends Model{
    public function __construct(){
        parent::__construct(); // chama o construtor da classe pai
        $this->tabela = 'clientes';

    }
    function inserir(array $dados):?int{
        $stmt = $this->prepare("INSERT INTO {$this->tabela} (nome, telefone) VALUES (:nome, :telefone)");
        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':telefone', $dados['telefone']);

          if($stmt->execute()){
               echo $this->lastInsertId();
         }        

        return null;
     }
     function atualizar(int $id, array $dados):bool{
        $stmt = $this->prepare("UPDATE {$this->tabela} SET
                                nome = :nome, telefone = :telefone
                                WHERE
                                id = :id" );

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':telefone', $dados['telefone']);

        if($stmt->execute()){
            return true;
        }
        else{
            return false;
        }
        return true;
     }
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
        return true;
     }
     function listar(int $id = null):?array{
        $stmt = $this->prepare("SELECT nome, telefone FROM clientes");
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        

        
        
        

        return $resultado;
     }
}

$cliente = new Cliente();
//$cliente->inserir(['nome' => 'Rei', 'telefone' => '9999-9999']);
//$cliente->apagar(6);

$results = $cliente->listar();

foreach($results as $result){
    echo "{$result['nome']}";
    echo "<br>";
}

