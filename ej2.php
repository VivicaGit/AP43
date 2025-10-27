<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
$countryString = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

$countryArray = explode(",", $countryString);

$capitals = [];

foreach ($countryArray as $countryName) {
    $capitals [] = ['country' => $countryName];
}

var_dump($capitals);

?>

</body>

</html>