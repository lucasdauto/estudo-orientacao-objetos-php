<?php


namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{

    /**
   * Returns the percentage of the tariff.
   *
   * @return float The percentage of the tariff.
   */
  protected function percentualTarifa(): float
  {
    return 0.03;
  }
}
