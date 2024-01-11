<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$diretor = new Titular(
  new CPF('123.456.789-10'),
  'Lucas',
  new Endereco('rua', 'bairro', 'cep', 'estado')
);

$autenticao = new Autenticador();

$autenticao->tentaLogin('abcd', $diretor);
