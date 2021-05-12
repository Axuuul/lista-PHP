<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1><?= $frase ?></h1>

    <a>Digite a primeira letra do seu nome, seu mês de nascimento e dia que nasceu respectivamente:</a>

    <form action="index.php" method="get">

        <input type="text" name="pletra">
        <input type="text" name="mes">
        <input type="text" name="dia">
        <input type="submit"> 

    </form>

</body>

</html>