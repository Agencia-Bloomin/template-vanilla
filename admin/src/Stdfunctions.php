<?php

function makeUrl($titulo)
{
  $titulo = $titulo;
  $titulo = ltrim($titulo);
  $titulo = rtrim($titulo);
  $titulo = preg_replace("[^a-zA-Z0-9_]", "", $titulo);
  $titulo = str_replace(" ", "-", $titulo);
  $titulo = ltrim($titulo);
  $titulo = rtrim($titulo);
  $titulo = strtolower($titulo);

  $comAcentos = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú');

  $semAcentos = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u');

  $titulo = str_replace($comAcentos, $semAcentos, $titulo);
  $titulo = preg_replace('/[^a-zA-Z0-9 -]/', "", $titulo);

  $titulo = str_replace("--", "-", $titulo);
  $titulo = str_replace("---", "-", $titulo);
  return ("$titulo");
}
