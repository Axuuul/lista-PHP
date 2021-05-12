<?php
#versão 1
$frase = "";

$letra = $_GET['pletra'];
$mes = $_GET['mes'];
$dia = $_GET['dia'];


$vetor3 = [
    "a" => "água com limão", 
    "b" =>"Bacon", 
    "c" =>"Cúrcuma", 
    "d" =>"Doce de leite",
    "e" =>"Azeite",
    "f" =>"Frango",
    "g" =>"Gengibre",
    "h" =>"Adoçante",
    "i" =>"Açucar",
    "j" =>"Jiló",
    "k" =>"Comida Japonesa",
    "l" =>"Leite",
    "m" =>"Macarrão",
    "n" =>"Nata",
    "o" =>"Ovo",
    "p" =>"Pizza",
    "q" =>"Óleo de cooc",
    "r" =>"Rabanada",
    "s" =>"Suco detox",
    "t" =>"Sal rosa",
    "u" =>"Glutamina",
    "v" =>"Jiló",
    "w" =>"Peixe",
    "x" =>"Própolis",
    "y" =>"Kumbucha",
    "z" =>"Peixe",
    
];

$vetor2 = [
    "ao acordar",
    "pré-treino",
    "amassado com limão",
    "no cabelo",
    "em Jejum",
    "de 3 em 3 horas",
    "no chá",
    "no café",
    "Depois das 18h00",
    "antes da aula",
    "misturado na àgua",
    "antes do almoço"
];

$vetor1 = [
    "diminui o inchaço",
    "previne infarto",
    "cura dor de dente",
    "limpa o fígado",
    "deixa mais inteligente",
    "limpa as artérias",
    "deixa musculos@",
    "fortalece a unha",
    "mata",
    "dá sorte",
    "da azar"
];


$posicao_aleatoria = rand(97, 102);
$caracter_aleatorio = chr($posicao_aleatoria);
$frase = "{$vetor3[$letra]} {$vetor2[$mes]}, {$vetor1[$dia]}";

require 'gerador_frases.view.php';