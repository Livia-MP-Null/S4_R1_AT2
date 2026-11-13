<?php

namespace S4_R1_AT1;

require_once __DIR__ . '/Funcionario.php';

class FuncionarioPJ extends Funcionario
{
    #[\Override]
    public function contratar(): string
    {
        return "{$this->nome} foi contratado como PJ.";
    }

    #[\Override]
    public function demitir(): string
    {
        return "O contrato de {$this->nome} foi encerrado.";
    }

    #[\Override]
    public function getDados(): string
    {
        return "Prestador PJ: {$this->nome}";
    }

    #[\Override]
    public function calcularSalario(): float
    {
        return $this->valorMensal;
    }
}