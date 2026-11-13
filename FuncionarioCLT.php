<?php

namespace S4_R1_AT1;

require_once __DIR__ . '/Funcionario.php';
require_once __DIR__ . '/FuncionarioInterface.php';

class FuncionarioCLT extends Funcionario implements FuncionarioInterface {

    public function contratar(): string {
        return "Funcionário CLT {$this->nome} contratado com carteira assinada.\n";
    }

    public function demitir(): string {
        return "Funcionário CLT {$this->nome} demitido.\n";
    }
}