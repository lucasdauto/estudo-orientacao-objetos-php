<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{CPF, Pessoa};

abstract class Funcionario extends Pessoa
{
  protected float $salario;

  public function __construct(string $nome, CPF $cpf,float $salario)
  {
    parent::__construct($nome, $cpf);
    $this->salario = $salario;
  }

  public function recuperaSalario(): float
  {
    return $this->salario;
  }

  public function alteraSalario(float $salario): void
  {
    $this->salario = $salario;
  }

  public function receberAumento(float $valorAumento)
  {
    if ($valorAumento < 0) {
      echo "Não pode receber aumento negativo";
      return;
    }
    $this->salario += $valorAumento;
  }

  abstract public function calculaBonificacao(): float;
}
