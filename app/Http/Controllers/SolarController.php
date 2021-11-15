<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class SolarController
{

    public function consulta(Request $request){

        $cep            = $request->cep;
        $estrutura      = $request->tipo;
        $valor_conta    = $request->valorConta;

        $curl = curl_init();

        $url = "https://api2.77sol.com.br/busca-cep?estrutura=$estrutura&valor_conta=$valor_conta&cep=$cep";

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => '',
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return json_decode($err, true);
        } else {
            return json_decode($response, true);
        }
    }

}
