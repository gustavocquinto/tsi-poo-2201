<?php
include_once(__DIR__ . '/Class/cliente.class.php');

$cliente = new Cliente($_POST['name'], $_POST['telephone']);

if ($cliente->criar()){
    echo "<h4 style='color: green;'> Cliente criado com sucesso </h4>";
}

else{
    echo "<h4 style='color: red;'> Cliente não criado. </h4>";
}

