<?php
include('Classes/cliente.class.php');

class Main {
    public function __construct(){
        $cliente = new Cliente;
    }
}

new Main;
?>