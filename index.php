<?php

namespace S4_R1_AT1;

require_once __DIR__ . '/FuncionarioCLT.php';
require_once __DIR__ . '/FuncionarioPJ.php';
require_once __DIR__ . '/FuncionarioRepository.php';

$repository = new FuncionarioRepository();

$funcionarioCLT = new FuncionarioCLT("Maria Souza", 3500.00);
$funcionarioPJ = new FuncionarioPJ("Tech Solutions LTDA", 5000.00);

$funcionarios = [$funcionarioCLT, $funcionarioPJ];

foreach ($funcionarios as $funcionario) {
    echo $repository->contratar($funcionario) . "<br>";

    echo $repository->exibirDados($funcionario) . "<br>";

    echo "Pagamento: R$ " . number_format(
        $repository->calcularPagamento($funcionario),
        2,
        ',',
        '.'
    ) . "<br>";

    echo $repository->demitir($funcionario) . "<br><br>";
}