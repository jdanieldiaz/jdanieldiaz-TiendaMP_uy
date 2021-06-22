<?php

       // SDK de Mercado Pago
       require __DIR__ .  '/vendor/autoload.php';
       MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");

       switch($_POST["type"]) {
            case "payment":
                $data = json_decode(file_get_contents('php://input'), true);
                echo $data;
                http_response_code(200);
                break;

       }

?>