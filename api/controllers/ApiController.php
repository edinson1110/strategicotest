<?php
require_once('models/apiModel.php');



class ApiController
{
    private $api;

    public function __construct()
    {
        $this->api = new ApiModel();
    }


    public function suma($value1, $value2)
    {
        $result = $this->api->suma($value1, $value2);
       
        return $this->getResult($result, "suma");
    }

    public function resta($value1, $value2)
    {
        $result = $this->api->resta($value1, $value2);

        return $this->getResult($result, "resta");
    }

    public function multiplicacion($value1, $value2)
    {
        $result = $this->api->multiplicacion($value1, $value2);

        return $this->getResult($result, "multiplicacion");
    }

    public function division($value1, $value2)
    {
        $result = $this->api->division($value1, $value2);

        return $this->getResult($result, "division");
    }

    public function getResult($result,$operacion)
    {
        $response = [
            'success' => true,
            'operacion' => $operacion,
            'data' => number_format($result, 0, ',', '.')
        ];

        return $response;
    }
}
