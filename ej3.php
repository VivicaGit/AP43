<?php

$cityArr = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"];
$countryArr = ["Japan", "Mexico", "USA", "India", "Korea", "China", "Nigeria", "Argentina", "Egypt", "England"];

$capitalsArr = [];

foreach ($cityArr as $city => $cityName) {
    $capitalsArr[] = [
        'country' => $countryArr[$city],
        'city' => $cityName
    ];
}
var_dump($capitalsArr);

?>