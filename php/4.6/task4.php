<?php

$cities = [
    'Минск' => 'Беларусь',
    'Кишенев' => 'Молдова',
    'Братислава' => 'Словакия',
    'Кошице' => 'Словакия',
    'Краков' => 'Польша',
];
//var_dump($cities);

$cities = array_flip($cities);
var_dump($cities);