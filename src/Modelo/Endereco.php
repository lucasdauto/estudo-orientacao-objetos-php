<?php

namespace Alura\Banco\Modelo;

/**
 * Classe Endereco
 * @package Alura\Banco\Modelo
 * @author Lucas Dauto
 * 
 */

class Endereco
{
  private string $rua;
  private string $bairro;
  private string $numero;
  private string $cidade;

  public function __construct(string $rua, string $bairro, string $numero, string $cidade)
  {
    $this->rua = $rua;
    $this->bairro = $bairro;
    $this->numero = $numero;
    $this->cidade = $cidade;
  }

  public function __toString(): string
  {
    return "{$this->rua}, {$this->numero} - {$this->bairro}, {$this->cidade}";
  }

  public function __get(string $nomeAtributo)
  {
    $metodo = "get" . ucfirst($nomeAtributo);
    return $this->$metodo();
  }

  public function __set(string $nomeAtributo, $valor):void
  {
    $metodo = "set" . ucfirst($nomeAtributo);
    $this->$metodo($valor);
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
