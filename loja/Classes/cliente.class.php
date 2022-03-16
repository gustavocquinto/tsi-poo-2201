<?php

include('usuario.class.php');
include ('../Interfaces/usuario.interface.php');
Class Cliente extends Usuario implements iUsuario{

    public function __construct() {
        echo "Construtor da classe Cliente";
    }
    public function acao(array $idProdutos):bool {
        echo "Executou ação do cliente";
        return true;
    }
}