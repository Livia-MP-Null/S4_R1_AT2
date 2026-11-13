<?php

namespace S4_R1_AT1;

require_once __DIR__ . '/Funcionario.php';
require_once __DIR__ . '/FuncionarioInterface.php';

class FuncionarioPJ extends Funcionario implements FuncionarioInterface {

    public function contratar(): string {
        return "Funcionário PJ {$this->nome} contratado via contrato de prestação de serviços.\n";
    }

    public function demitir(): string {
        return "Contrato PJ de {$this->nome} encerrado.\n";
    }
}