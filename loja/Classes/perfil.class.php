<?php

include('interfaces/crud.interface.php');

Class Perfil implements Crud {
    public $id;
    private $nome;
    private $descricao;
    private $permissoes;


    public function criar(array $dados):bool{
        echo"\n Criado Perfil\n";
        return true;    

    }

    public function apagar(int $id):bool{
        echo"\n Excluido Perfil\n";
        return true;  
    }

    public function editar(int $id, array $dados):bool{
        echo"\n Editado Perfil\n";
        return true;  
    }

    public function listar(int $id = null):array{
        echo"\n Listado Perfil\n";
        return array('teste');  
    }
}