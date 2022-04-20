<?php

Class Database{
    private $dsn;
    private $user;
    private $password;

    public function __construct() {

        $this->dsn = 'mysql:dbname=invest;host=localhost';
        $this->user = 'root';
        $this->password = '';

        $this->dbh = new PDO($this->dsn, $this->user, $this->password);

        return $this;
    }
}