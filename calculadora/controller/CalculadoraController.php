<?php
    require_once('../model/CalculadoraModel.php');

class CalculadoraController
{

    private $calculadora;

    public function __construct() {
       $this->calculadora = new CalculadoraModel();
    }

    public function calcular()
    {
        $operacion = $_POST['operacion'];
        $params = array("value1"=>$_POST['value1'], "value2"=>$_POST['value2']);
      
        $resultado = $this->calculadora->calcular($operacion, $params);
        echo $resultado;
    }
}

$exe = new CalculadoraController();
$exe->calcular();

