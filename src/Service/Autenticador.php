<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
  public function tentaLogin(string $senha, Autenticavel $autenticavel): void
  {
    if ($autenticavel->podeAutenticar($senha)) {
      echo "Login realizado com sucesso";
    } else {
      echo "Login falhou";
    }
  }
}
