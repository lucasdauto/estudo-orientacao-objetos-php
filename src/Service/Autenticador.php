<?php

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
  public function tentaLogin(string $senha, Diretor $diretor)
  {
    if ($diretor->podeAutenticar($senha)) {
      echo "Login realizado com sucesso";
    } else {
      echo "Login falhou";
    }
  }
}
