<?php 
require_once "./FuncionarioInterface.php";

class FuncionarioRepository {
    public function contratar(FuncionarioInterface $funcionario): string {
        return $funcionario->contratar();
    }

    public function demitir(FuncionarioInterface $funcionario): string {
        return $funcionario->demitir();
    }}
    ?>