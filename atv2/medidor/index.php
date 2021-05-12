<?php
/*
$result = file_get_contents($url);
print_r($result);
*/
$dia = $_GET['campo_dia'];
$mes = $_GET['campo_mes'];
$ano = $_GET['campo_ano'];
//ERRO = números absurdos ->rever formula
function somatorio($n1){
    $total = 0;
    for ($i = 0; $i <= $n1; $i++) {
       $total = $i + $total;
    }echo $total;
}
echo somatorio($mes)." + $ano /100 x 50 - $dia {"; //= ...

//echo somatorio($mes);//$total;
$safadeza = somatorio($mes) + ($ano/1000) * (50-$dia);
$anjo = 100 - $safadeza;

include "safadometro.view.php";