<?php

$startDeposit = 100000;
$depositNow = 100000;
$year = 0;
$percent = 8;

do{
    if ($year % 3 === 0){
        $percent += 2;
    }
    $depositNow = $depositNow * (1 + ($percent / 100));
    $year++;
} while($depositNow < $startDeposit * 2);

echo "Депозит привысил 200000 рублей на год №$year . Сумма депозита составила $depositNow рублей";
