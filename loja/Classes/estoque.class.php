<?php

include('interfaces/crud.interface.php');
Class Estoque implements Crud{
    public $id;
    private $id_produto;
    private $qtd;
    private $local;
    private $limite_min;
    private $produto;

    public  function __construct(Produto $objProd = null )
    {
        if(is_object($objProd)){
            $this->produto = $objProd;
        }
    }

    public function criar(array $dados):bool{
        foreach($dados as $dado){
            echo "Esta é a ${dado}";
            echo "<br>";
            echo "<br>";
        }
        return true;
    }

    public function apagar(int $id):bool{
        echo "Produto apagado com sucesso <br> <br>";
        return true;

    }

    public function editar(int $id, array $dados):bool{
        echo "Produto editado com sucesso";
        echo "<br>";
        return true;
    }

    public function listar(int $id = null):array{
        echo "Listado com sucesso";
        $array = [];
        return $array;

    }

    private function avisoLimiteMax(){
        
    }
}