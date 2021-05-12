<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="GET">

        <input type="text" name="campo_cidade"> <br/>
        <input type="submit">

    </form>
    <h2><?= $nome ?></h2>
    <p>temperatura: <?= $temperatura ?></p>
    <p>sensação: <?= $sensacao ?></p>
    <p>umidade: <?= $umidade ?></p>
    <p>velocidade do vento: <?= $velocidade ?></p>
</body>
</html>