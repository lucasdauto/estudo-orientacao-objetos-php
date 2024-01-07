<?php

spl_autoload_register(function ($nomeClasse) {
  $caminhoBase = __DIR__;
  $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeClasse);
  $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo) . '.php';
  $caminhoCompleto = $caminhoBase . DIRECTORY_SEPARATOR . $caminhoArquivo;

  if (file_exists($caminhoCompleto)) {
    require_once $caminhoCompleto;
  }
});
