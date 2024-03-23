<?php

class CalculadoraModel
{

    private $apiUrl;
    private $curl;


    public function __construct()
    {
        $this->apiUrl = "http://localhost/strategico/api/index.php/";
        $this->curl = curl_init();
    }

    public  function calcular($operacion, $params)
    {
        $response = curl_exec($this->curl);

        
        curl_setopt($this->curl, CURLOPT_URL, $this->apiUrl . $operacion);
        curl_setopt($this->curl, CURLOPT_POST, 1);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($this->curl);
        curl_close($this->curl);
        
        $data = json_encode($response);
        return $data;

       
    }
}
