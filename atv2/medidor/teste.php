<?php
$mes = 5;

function somatorio($n1){
    $total = 0;
    for ($i = 0; $i <= $n1; $i++) {
       $total = $i + $total;
    }echo $total;
}
echo somatorio($mes); //= ...

/*
$safadeza = somatorio($mes) + ($ano/100) * (50-$dia);
$anjo = 100 - $safadeza;*/