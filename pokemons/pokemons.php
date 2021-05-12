<?php

const URL = "https://pokeapi.co/api/v2/pokemon/"; #2

$pokemons = [];

for ($i=1; $i <= 15; $i++){

    $id = $i;
    $url = URL . $id;
    $result = file_get_contents($url);
    $pokemonMatriz = json_decode($result, true);

    $pokemons[$i]["nome"] = $pokemonMatriz["forms"][0]["name"];
    $pokemons[$i]["altura"] = $pokemonMatriz["height"];
    $pokemons[$i]["peso"] = $pokemonMatriz["weight"];
    $pokemons[$i]["habilidades"] = $pokemonMatriz["abilities"];
    $pokemons[$i]["imagem"] = $pokemonMatriz["sprites"]["other"]["dream_world"]["front_default"];

}

$id = 1;
$url = URL . $id;
$result = file_get_contents($url);
$pokemonMatriz = json_decode($result, true);

$nome= $pokemonMatriz["forms"][0]["name"];
$altura = $pokemonMatriz["height"];
$peso= $pokemonMatriz["weight"];
$habilidades = $pokemonMatriz["abilities"];
$imagem = $pokemonMatriz["sprites"]["other"]["dream_world"]["front_default"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .card{
        width: 250px;
        height: 450px;
        border: solid 2px blue;
        position: relative;
        float: left;
        padding: 5px;
    }
    .card h4{
        text-align: center;
    }
    .card img{
        max-width: 249px;
        max-height: 400px;
        align-self: center;
    }
    </style>
    <title>Document</title>
</head>
<body>
    <?php foreach($pokemons as $poke): ?>

    <div class="card">
    <h4>Nome: <?= $poke["nome"] ?> </h5>
    <p>Altura: <?= $poke["altura"] ?></p>
    <p>Peso: <?= $poke["peso"] ?></p>
    <p>Habilidades:</p>
    <ul> 

        <?php foreach ($poke["habilidades"] as $hab): ?>

        <li><?php print_r($hab['ability']['name']) ?> </li>

        <?php endforeach; ?> 

    </ul>

    <img src="<?= $poke["imagem"] ?>">

    </div>
    <?php endforeach ?>

</body>
</html>
