<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
  public function sobeDeNivel(): void
  {
    $this->receberAumento($this->salario * 0.5);
  }

  public function calculaBonificacao(): float
  {
    return 500.00;
  }
}
