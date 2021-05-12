<?php

const ID = "AMeFGOqk86aEyL9yKSpgs";
const SECRET = "aPG5tNMLvqz20lT6xUPj1lE8enRmzf6yjl9iaAmq";
//https://api.aerisapi.com/[:endpoint]/[:action]?client_id=[ID]&client_secret=[SECRET]
const BASE_URL = "https://api.aerisapi.com/conditions/";

/*
$result = file_get_contents($url);
echo <pre>;
print_r($result);*/
//elseif(null($_GET['campo_cidade'])){  $nome, $temperatura, $sensacao, $umidade,$velocidade  $dados = 1;} 
$dados = [];

  if (isset ($_GET['campo_cidade']) ) {
     $cidade = $_GET['campo_cidade'];
     $cidade = urlencode($cidade);
     $url = BASE_URL . "{$cidade},br?client_id=" . ID . "&client_secret=" . SECRET;
    
    $json  = file_get_contents($url);
    $dados = json_decode($json, true);

    //se exitir a cidade cria vars
  $nome = $dados['response'][0]['place']['name'];
  $temperatura = $dados['response'][0]['periods'][0]['tempC'];
  $sensacao = $dados['response'][0]['periods'][0]['feelslikeC'];
  $umidade = $dados['response'][0]['periods'][0]['humidity'];
  $velocidade = $dados['response'][0]['periods'][0]['windSpeedKPH'];
  
  }
else{print("xX_Nunca nem vi_Xx");}

//echo $url;
/*if(isset($_GET['campo_cidade'])){ */
//file_get_contains($url);
//echo $url;

/*
 echo "<pre>";
 print_r($dados);
echo "</pre>";*/


include "clima_view.php";