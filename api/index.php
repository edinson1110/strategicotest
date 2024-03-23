<?php

require_once 'controllers/ApiController.php';

$api = new ApiController();

$url = $_SERVER['REQUEST_URI'];

$urlDiv = explode('/', trim($url, '/'));


$operacion = isset($urlDiv[count($urlDiv)-1]) ? $urlDiv[count($urlDiv)-1] : '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['value1']) && isset($_POST['value2'])) {

        switch ($operacion) {
            case 'suma':
                $result = $api->suma($_POST['value1'], $_POST['value2']);
                break;
            case 'resta':
                $result = $api->resta($_POST['value1'], $_POST['value2']);
                break;
            case 'multiplicacion':
                $result = $api->multiplicacion($_POST['value1'], $_POST['value2']);
                break;
            case 'division':
                $result = $api->division($_POST['value1'], $_POST['value2']);
                break;
            default:
                header('HTTP/1.1 404 Not Found');
                echo json_encode(['error' => 'Not Found']);
            break;
        }

        header('Content-Type: application/json');
        echo json_encode(['result' => $result]);
    } else {
        header('HTTP/1.1 400 Bad Request');
        echo json_encode(['error' => 'Missing data in request']);
    }
} else {
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(['error' => 'Method Not Allowed']);
}
