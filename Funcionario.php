<?php

namespace S4_R1_AT1;

require_once __DIR__ . '/FuncionarioInterface.php';

abstract class Funcionario implements FuncionarioInterface
{
    // Atributos
    protected string $nome;
    protected float $valorMensal;

    // Construtor
    public function __construct(string $nome, float $valorMensal)
    {
        $this->nome = $nome;
        $this->valorMensal = $valorMensal;
    }

    // Métodos
    abstract public function contratar(): string;

    abstract public function demitir(): string;

    abstract public function getDados(): string;

    abstract public function calcularSalario(): float;
}