<?php

include('../interfaces/crud.interface.php');
Class Produto implements Crud {
    public $id;
    private $nome;
    private $descricao;
    private $preco;
    private $id_categoria;

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

}