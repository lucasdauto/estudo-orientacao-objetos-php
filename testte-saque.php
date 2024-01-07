<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta =  new ContaPoupanca(new Titular(
  new CPF('123.456.789-10'),
  'Lucas',
  new Endereco(
    'Rua',
    '123',
    'Bairro',
    'Cidade',
    'UF',
    '00000-000'
  )
));

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
exit();
