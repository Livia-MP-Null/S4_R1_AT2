<?php

namespace S4_R1_AT1;

abstract class Funcionario {

    protected string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }
}