<?php 
include('../Classes/estoque.class.php');
include('../Classes/produto.class.php');

class Main {
    private $produto;
    private $estoque;
    public function __construct(){
        $this->produto = new Produto();
        $this ->produto->criar(['melancia']);

        $this->estoque = new Estoque($this->produto);
    }

    
new Main;

>

