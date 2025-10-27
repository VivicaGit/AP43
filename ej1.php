<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php

$cityString = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";

$cityArray = explode(",", $cityString);
    
$capitals = [];

//recorrer el array simple
foreach ($cityArray as $cityName) {
    //añadir el array asociativo directamente
    $capitals[] = ['city' => $cityName];
}

var_dump($capitals);

?>

</body>

</html>