<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco =  new Endereco(
  'Jardim',
  'bairro',
  '456',
  'cidade'
);

$endereco2 = new Endereco(
  'rua',
  'bairro',
  '12',
  'cidade 2'
);


// echo $endereco . PHP_EOL;

// echo $endereco2;

echo $endereco->rua;
