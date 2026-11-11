<?php

require_once './Funcionario.php';

class FuncionarioPJ extends Funcionario
{
    public function contratar(): string 
    {
        return "Funcionário PJ {$this->nome} contratado via contrato de prestação de serviços.\n";
    }

    public function demitir(): string 
    {
        return "Contrato PJ de {$this->nome} encerrado.\n";
    }
}
