<?php

namespace Alura\Banco\Modelo;

class Endereco
{
  private string $rua;
  private string $bairro;
  private string $numero;
  private string $cidade;

  public function __construct(string $rua, string $bairro, string $numero, string $cidade)
  {
  }

  public function getRua(): string
  {
    return $this->rua;
  }
  public function getBairro(): string
  {
    return $this->bairro;
  }
  public function getNumero(): string
  {
    return $this->numero;
  }
  public function getCidade(): string
  {
    return $this->cidade;
  }

  public function setRua(string $rua)
  {
    $this->rua = $rua;
  }

  public function setBairro(string $bairro)
  {
    $this->bairro = $bairro;
  }

  public function setNumero(string $numero)
  {
    $this->numero = $numero;
  }

  public function setCidade(string $cidade)
  {
    $this->cidade = $cidade;
  }
}
