<?php

require_once './FuncionarioInterface.php';

abstract class Funcionario implements FuncionarioInterface 
{
    protected string $nome;

    public function __construct(string $nome) 
    {
        $this->nome = $nome;
    }

    // Os métodos contratar() e demitir() continuam obrigatórios para os filhos
    abstract public function contratar(): string;
    abstract public function demitir(): string;
}
