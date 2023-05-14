<?php

$games = [
    'DayZ' => ['открытый мир', 'зомби', 'выживание',],
    'Kenshi' => ['открытый мир', 'фантастика', 'выживание',],
    'GTA 4' => ['открытый мир', 'приключения', 'сюжетная',],
];
//var_dump($games);

$games2 = array_merge($games['DayZ'], $games['Kenshi'], $games['GTA 4']);
//var_dump($games2);
$games2 = array_unique($games2);
var_dump($games2);