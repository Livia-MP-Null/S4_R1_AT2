<?php

require_once './Funcionario.php';

class FuncionarioCLT extends Funcionario
{
    public function contratar(): string 
    {
        return "Funcionário CLT {$this->nome} contratado com carteira assinada.\n";
    }

    public function demitir(): string 
    {
        return "Funcionário CLT {$this->nome} demitido.\n";
    }
}
