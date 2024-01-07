<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
  protected string $nome;
  private CPF $cpf;

  public function __construct(string $nome, CPF $cpf)
  {
    $this->validaNome($nome);
    $this->nome = $nome;
    $this->cpf = $cpf;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function getCpf(): string
  {
    return $this->cpf->recuperaNumero();
  }

  public function setCpf($cpf)
  {
    $this->cpf = $cpf;
  }

  protected function validaNome(string $nomeTitular)
  {
    if (strlen($nomeTitular) < 5) {
      echo "Nome precisa ter pelo menos 5 caracteres";
      exit();
    }
  }
}
