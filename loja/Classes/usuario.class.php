<?php

include('perfil.class.php');

Class Usuario implements Crud{
    public $id;
    private $id_perfil;
    private $email;
    private $nome;
    private $senha;

    public function __construct (){
        echo "construtor da classe Usuário";
    }

    protected function xpto(){
        echo "\n Método XPTO \n";
    }

    public function criar (array $dados):bool{
        echo "\nperfil criado";
        return true;
    }
    public function apagar(int $int):bool{
        echo "\nperfil atualizado $id\n";
        return true;
    }
    public function editar (int $id, array $dados):bool{
        echo "\nperfil deletado";
        return true;
    }

    public function listar(int $id = null): array{
        echo "\nperfil listando";
        return[];
    }

    public function acao(array $idProdutos):bool{
        return [];
    }

}