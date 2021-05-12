<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
 <center>
  <h2>Teorema de Wesley Saf.</h2>

    <form action="index.php" method="GET">

        <input type="quanty" name="campo_dia" placeholder="dia" max = 31> <br />
        <input type="quanty" name="campo_mes" placeholder="mes" max = 12> <br />
        <input type="quanty" name="campo_ano" placeholder="ano" min = 1920 max = 2022> <br />
        <input type="submit">

    </form>

    <p>dia: <?= $dia ?></p>
    <p>mês: <?= $mes ?></p>
    <p>ano: <?= $ano ?></p>
    <p ><?= $anjo ?>% anjo, perfeito, mas <?= $safadeza ?>% é VAGABUNDO! </p>
    
 </center>
</body>

</html>