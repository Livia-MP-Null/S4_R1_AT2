<?php 
require_once "./FuncionarioCLT.php";
require_once "./FuncionarioPJ.php";
require_once "./FuncionarioRepository.php";

$repo = new FuncionarioRepository();

$f1 = new FuncionarioCLT("Maria Souza");
$f2 = new FuncionarioPJ("Tech Solutions LTDA");

echo $repo->contratar($f1);
echo $repo->contratar($f2);
echo $repo->demitir($f1);
echo $repo->demitir($f2);
