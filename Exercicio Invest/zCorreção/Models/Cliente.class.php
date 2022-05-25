<?php 

require_once __DIR__ . '/Model.class.php';
require_once __DIR__ . '/Investimento.class.php';

class Cliente extends Model{

    private Investimento $investimento;

    public function __construct(){
        parent::__construct(); // chama o construtor da classe pai
        $this->tabela = 'clientes';
        $this->investimento = new Investimento;
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
     function listar(int $id = null):?array{
        $stmt = $this->prepare("SELECT id, nome, telefone FROM clientes");
        $stmt->execute();
        $resultado = $stmt->fetchAll();

        return $resultado;
     }

     function carteira (int $id_cliente):array{

    
        $stmt = $this->prepare("SELECT id, qtd, id_ativo FROM {$this->tabela} WHERE id_cliente = :id");
        $stmt->bindParam(':id', $id_cliente);
        $stmt->execute();

        $lista = [];
    
        while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
            $lista[] = $registro;
        }
    
        return $lista;
    }
}

//$cliente = new Cliente();
//$cliente->inserir(['nome' => 'Rei', 'telefone' => '9999-9999']);
//$cliente->apagar(6);