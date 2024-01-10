<?php


require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor};
use Alura\Banco\Service\ControladorDeBonificacao;

$umFuncionario = new Desenvolvedor(
  'Lucas',
  new CPF('123.456.789-10'),
  'Desenvolvedor',
  8000
);

$umFuncionario->sobeDeNivel();


$umaFuncionaria =  new Gerente(
  'Maria',
  new CPF('123.456.789-10'),
  'Gerente',
  10000
);


$umDiretor = new Diretor(
  'Joaquim',
  new CPF('123.456.789-10'),
  'Diretor',
  20000
);



$controlador = new ControladorDeBonificacao();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umaFuncionaria);
$controlador->adicionaBonificacao($umDiretor);

echo $controlador->recuperaTotal();
