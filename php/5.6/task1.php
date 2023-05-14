<?php

$word = 'caesar cipher';
$number = 3;
for ($i = 0; $i < strlen($word); $i++){
    $index = ord($word[$i]);
    $word[$i] = chr($index + $number);
    echo "$word[$i]";
}

echo "\n";

for ($f = 0; $f < strlen($word); $f++){
    $index2 = ord($word[$f]);
    $word[$f] = chr($index2 - $number);
    echo "$word[$f]";
}