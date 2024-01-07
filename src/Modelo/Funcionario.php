<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
  private string $cargo;

  public function __construct(string $nome, CPF $cpf, string $cargo)
  {
    parent::__construct($nome, $cpf);
    $this->cargo = $cargo;
  }

  public function getCargo(): string
  {
    return $this->cargo;
  }

  public function setCargo(string $cargo): void
  {
    $this->cargo = $cargo;
  }
}