<?php
require_once "vendor/autoload.php";
use JuninhSilva\Site\Busca;

$busca = new Busca;
print_r($busca->getEnderecoPeloCep('37901544'));