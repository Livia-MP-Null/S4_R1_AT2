<?php

namespace S4_R1_AT1;

require_once __DIR__ . '/FuncionarioInterface.php';

class FuncionarioRepository
{
    public function contratar(FuncionarioInterface $funcionario): string
    {
        return $funcionario->contratar();
    }

    public function demitir(FuncionarioInterface $funcionario): string
    {
        return $funcionario->demitir();
    }

    public function exibirDados(FuncionarioInterface $funcionario): string
    {
        return $funcionario->getDados();
    }

    public function calcularPagamento(FuncionarioInterface $funcionario): float
    {
        return $funcionario->calcularSalario();
    }
}