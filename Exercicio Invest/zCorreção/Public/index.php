<?php

require_once('../Models/Cliente.class.php');
class Main{

    private cliente $cliente;
    private investimento $investimento;

    public function __construct(){
        $this->cliente = new cliente;

        $this->listarClientes();
    }

    public function listarClientes(){
        $clientes = $this->cliente->listar();


        //Para cada cliente
        forEach($clientes as $cliente){
          
                //Recupero a carteira de investimentos
            $carteira = $this->cliente->carteira($cliente['id']);
            $totalAtivos = 0;

            //E calculo total de ativos na carteira
            forEach($carteira as $cadaAtivo){
                $totalAtivos += $cadaAtivo['qtd'];
            };
            $clientes['totalAtivos'] = $totalAtivos;
        };
        require_once('../Views/cliente.view.php');
        }
}

new Main;