<?php

$dia = $_GET['dia'];
$mes = $_GET['mes'];
$ano = $_GET['ano'];

$soma = 0;
    for ($i = 1; $i <= $mes; $i++) {
        $soma = $soma+$i;
    }

$safadeza = $soma + ($ano/100) * (50-$dia);
$resultado = 100-$safadeza;

require 'safadeza.view.php';
