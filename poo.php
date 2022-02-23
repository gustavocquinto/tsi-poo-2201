<?php

interface User {

    public function seLogar();
}




class Usuario implements User {

    /*chamamos isso de visibilidade, protected, private, public*/protected $nome; 
    private $email;
    private $nasc;

    public function seLogar() {
        echo "Logado";
    }

    public function seDeslogar() {
        echo "tchau";
    }

    public function setNome ($val){
        $this->nome = $val;
    }
}

class Professor extends Usuario {
    public function mudaNome() {
        $this->nome = 'Milan';
    }

    public function getNome(){
        return $this->nome;
    }

} 

class Turma{
    private $professor;

    public function setProfessor ($prof){
        $this->nome = $prof;
    }
}

$luiz = new Professor;
$luiz -> setNome('Testando');
echo $luiz -> getNome();

$turma = new Turma;
$turma -> setProfessor('Bono');
/*
    NO UML V
    + public, - private, # protected, _ significa static
    ABAIXO V, STATIC
*/
/*Usuario::seLogar();