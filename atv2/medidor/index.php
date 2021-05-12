<?php

$dia = $_GET['campo_dia'];
$mes = $_GET['campo_mes'];
$ano = $_GET['campo_ano'];

somatorio
$safadeza = somatorio($mes) + ($ano/100) * (50-$dia);
$anjo = 100 - $safadeza;

include "safadometro.view.php";