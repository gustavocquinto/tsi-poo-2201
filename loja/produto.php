<?php
include('../Classes/produto.class.php');

class Main{

    private $produto;
    public function __construct() {
        $this->produto = new Produto;

        $vetor = [];

        $this->novo($vetor);
    }

    public function novo($vetor):void{
        if (is_array($vetor)){
            $this->produto->criar($vetor);
        }
        else{
            throw 'Erro';
        }
    }
    public function __destruct(){
        echo "Destruido com sucesso<br>";
    }
}
new Main;
$obj = new Produto;


$array = ['Primeira linha', 'Segunda linha', 'Terceira linha', 'Quarta linha'];
$obj->criar($array);
$int = 0;
$obj->apagar($int);

$obj->editar ($int, $array);

$obj->listar($int);

?>