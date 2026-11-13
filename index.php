<?php

namespace S4_R1_AT1;

require_once __DIR__ . '/FuncionarioCLT.php';
require_once __DIR__ . '/FuncionarioPJ.php';
require_once __DIR__ . '/FuncionarioRepository.php';

$repo = new FuncionarioRepository();

$f1 = new FuncionarioCLT("Maria Souza");
$f2 = new FuncionarioPJ("Tech Solutions LTDA");

echo $repo->contratar($f1);
echo $repo->contratar($f2);

echo $repo->demitir($f1);
echo $repo->demitir($f2);