<?php
use PHPUnit\Framework\TestCase;
use JuninhSilva\BuscaCep\Busca;
class BuscaTest extends TestCase{

    /** 
     * @dataprovider dadosTeste
    */
    public function testGetEnderecoPeloCepDefaultUsage(string $input, array $esperado){
        $resultado = new Busca;
        $resultado = $resultado->testGetEnderecoPeloCep($input);
        $this->assertEquals($esperado, $resultado);
    }

    public function dataTeste(){
        return [
            "Sé"=> [
            "01001000",
            [
                "cep"=> "01001-000",
                "logradouro"=> "Praça da Sé",
                "complemento"=> "lado ímpar",
                "bairro"=> "Sé",
                "localidade"=> "São Paulo",
                "uf"=> "SP",
                "unidade"=> "",
                "ibge"=> "3550308",
                "gia"=> "1004"
                ]
            ],[
                "Escola"=>[
                    "37901524",
                    [
                        "cep"=> "37901-524",
                        "logradouro"=> "Rua dos Tapajós",
                        "complemento"=> "",
                        "bairro"=> "Nossa Senhora Aparecida",
                        "localidade"=> "Passos",
                        "uf"=> "MG",
                        "unidade"=> "",
                        "ibge"=> "3147907",
                        "gia"=> ""
                    ]
                ]
            ],
            [
                "Casa" => [
                    "cep" => "37901-544",
                    "logradouro" => "Rua Albertino Ferreira Rosa",
                    "complemento"=> "de 301/302 ao fim",
                    "bairro" => "Aclimação",
                    "localidade" => "Passos",
                    "uf" => "MG",
                    "unidade" => "",
                    "ibge" => "3147907",
                    "gia" => ""
                ]
            ]
            ];
    }
}