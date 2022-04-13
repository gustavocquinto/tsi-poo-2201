<?php
Interface CRUD {
    public function criar():bool;

    public function editar(int $id):bool;

    public function listar(?int $id):?bool;

    public function deletar(int $id):bool;
}