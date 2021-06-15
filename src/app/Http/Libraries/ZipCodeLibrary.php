<?php

namespace App\Http\Libraries;

use Illuminate\Support\Facades\Http;

class ZipCodeLibrary
{
    /**
     * Return a external request API
     *
     * @param  string
     * @return \Illuminate\Http\Response
     */
    public function requestAddressByZipCode(string $cep)
    {
        return Http::get('https://api.postmon.com.br/v1/cep/'.$cep);
    }

    /**
     * Retorn error massage if address
     *
     * @param  string
     * @return mixed return false or string error
     */
    public function compareRequestAddress(array $address)
    {
        $response = $this->requestAddressByZipCode($address["cep"]);
        $address_api = $response->json();
        if($response->getStatusCode() == 200){
            if(!is_array($address_api)){
                return "CEP não encontrado";
            }
            unset($address["_token"]);
            unset($address["nome"]);
            unset($address["complemento"]);
            unset($address["numero"]);
            unset($address_api["estado_info"]);
            unset($address_api["cidade_info"]);
            if(count(array_diff($address, $address_api)) > 0){
                return "Erro, Um ou mais campos (logradouro, bairro, cidade e/ou estado) não bate(em) com o CEP informado.";
            }
            return false;
        }

        if($response->getStatusCode() == 404){
            return "CEP não encontrado";
        }

        return "Erro, tente mais tarde.";
    }

}

