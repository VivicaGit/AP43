<?php
$dataString = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.";

$cityCapi = explode(";", $dataString);

foreach ($cityCapi as $pares) {
    $separados = explode(",", $pares);
    $capitales [] = [
        'Pais' => $separados[0],
        'Capital' => $separados[1]
    ];
}

var_dump($capitales);