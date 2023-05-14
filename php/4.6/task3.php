<?php

$list = [
    'a' => 'string1',
    'b' => 'string2',
    'c' => 'string3',
];
//var_dump($list);

$list2 = array_keys($list);
//var_dump($list2);

$string = implode(' ', $list2);
echo $string;