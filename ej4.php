<?php
$cityString = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires,Cairo,London";
$countryString = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

$cityArr = explode(",", $cityString);
$countryArr = explode(",", $countryString);

foreach ($cityArr as $city => $nombre) {
    $capitalsArr[] = [
        'country' => $countryArr[$city],
        'city' => $nombre
    ];

}

var_dump($capitalsArr);
?>