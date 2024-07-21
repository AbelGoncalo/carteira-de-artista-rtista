<?php

namespace App\Services;

 class RestCountriesAPI{

    //Estamos a usar o metodo como estático para que não seja necessário instanciar a classe ao ser chamada ...
    public static function getAllCountries(){
        try {
            $client = new \GuzzleHttp\Client();
            $url = "https://restcountries.com/v3.1/all";
            $response = $client->request('GET', $url,[
                'verify' => false
            ]);
            //O json_decode é recebe um array associativo mas quando é passado o true
            $resonseBody = json_decode($response->getBody(), true);
            $countries = [];
            foreach($resonseBody as $item){
                $countries[] = $item["name"]["common"];
            }
             return $countries;
        } catch (\Throwable $th) {
           return [];
        }
    }

 }
