<?php

const ID = "W3fInnjqQmEqR9E9UFy97 ";
const SECRET = "iwpp7KoiREmnAxBt6U43H3rQf07P6lnwoBDO63jT";
const BASE_URL = "https://api.aerisapi.com/conditions/";

if($cidade == null){
    $cidade = "cascavel";
}else{
    $cidade = $_GET['campo_cidade'];
    
}
$cidade = urlencode($cidade);
$url = BASE_URL . "{$cidade},br?client_id=". ID . "&client_secret=" . SECRET;

//tive problemas com o GET, sempre dava "undefined array key" assim que ia pro navegador, tentei arrumar adicionando um if que
//checava se o campo estava nulo ou não, mas não deu certo

$json  = file_get_contents($url);
$dados = json_decode($json, true);

$nome = $dados['response'][0]['place']['name'];
$temperatura = $dados['response'][0]['periods'][0]['tempC'];
$sensacao = $dados['response'][0]['periods'][0]['feelslikeC'];
$umidade = $dados['response'][0]['periods'][0]['humidity'];
$velocidade = $dados['response'][0]['periods'][0]['windSpeedKPH'];

include "clima.php";