<?php

$a = 'hello@skillboxxxxxxxx.ru';
$b = strpos($a, '@');
var_dump($b);
$substring = substr($a, $b + 1);
var_dump($substring);