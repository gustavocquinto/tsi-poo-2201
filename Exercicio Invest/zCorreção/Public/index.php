<?php

require_once('../Models/Cliente.class.php');
require_once('../Models/Investimento.class.php');
class Main{

    private Cliente $cliente;
    private Investimento $investimento;

    public function __construct(){
        $this->cliente = new Cliente;
        $this->Investimento = new Investimento;

        $this->listarClientes();
    }

    public function listarClientes(){
        $clientes = $this->cliente->listar();


        //Para cada cliente
        forEach($clientes as $cliente){

            //Recupero a carteira de investimentos
            $carteira = $this->investimentos->carteiraCliente($cliente['id']);

            $totalAtivos = 0;

            //E calculo total de ativos na carteira
            forEach($carteira as $cadaAtivo){
                $totalAtivos += $cadaAtivo['qtd'];
            };
            $clientes['totalAtivos'] = $totalAtivos;
        };
        
        }
 
    

}

new Main;