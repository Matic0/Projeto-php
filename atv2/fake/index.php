<?php
#versão 2.0 //Modo Form input
$frase = "";

$vetor1 = [
    1 => "água com limão",
    2 => "Bacon",
    3 => "Cúrcuma",
    4 => "Doce de leite",
    5 => "Azeite",
    6 => "Frango",
    7 => "Gengibre"
];

$vetor2 = [
    1 => "ao acordar",
    2 => "pré-treino",
    3 => "injetável",
    4 => "no cabelo",
    5 => "em Jejum",
    6 => "de 3 em 3 horas",
    7 => "no chá",
    8 => "no café"
];

$vetor3 = [
    "a" => "diminiu o inchaço",
    "b" => "previne infarto",
    "c" => "cura TPM",
    "d" => "limpa o fígado",
    "e" => "Deixa mais inteligente",
    "f" => "Limpa as artérias"
];

$posicao_aleatoria = rand(97, 102);

$caracter_aleatorio = chr($posicao_aleatoria);

$frase = "{$vetor1[rand(0, 6)]} {$vetor2[rand(0, 7)]}, {$vetor3[$caracter_aleatorio]}";

require 'gerador_frases.view.php';