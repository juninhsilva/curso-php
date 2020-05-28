<?php

namespace JuninhSilva\BuscaCep;

use JuninhSilva\BuscaCep\ws\ViaCep;

class Busca
{

    public function getEnderecoPeloCep(string $cep): array
    {
        $cep = preg_replace('/[^0-9]/im', '', $cep);

        $get = new ViaCep();
        return $get->get($cep);
    }
}
