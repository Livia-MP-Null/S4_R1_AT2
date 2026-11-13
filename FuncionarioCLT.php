<?php

namespace S4_R1_AT1;

require_once __DIR__ . '/Funcionario.php';

class FuncionarioCLT extends Funcionario
{
    #[\Override]
    public function contratar(): string
    {
        return "{$this->nome} foi contratado pelo regime CLT.";
    }

    #[\Override]
    public function demitir(): string
    {
        return "{$this->nome} foi desligado do regime CLT.";
    }

    #[\Override]
    public function getDados(): string
    {
        return "Funcionário CLT: {$this->nome}";
    }

    #[\Override]
    public function calcularSalario(): float
    {
        return $this->valorMensal;
    }
}