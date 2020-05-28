<?php
require_once "vendor/autoload.php";
use JuninhSilva\BuscaCep\Busca;

$busca = new Busca;

$resultado = $busca->getEnderecoPeloCep('37901544');

print_r($resultado);