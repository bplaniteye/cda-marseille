<?php
require 'functions.php';
   ?>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="tp05.php">TP 05

</a>
   <h1>CALCUL PRIX TTC</h1>
    <form action="index.php" method="post">
        <label for="prixHT">Prix HT</label>
        <input type="text" name="prixHT" id="prixHT" value="<?php $prixHT ?>">
        <input type="submit" value="Calculer">
    </form>
    <p><?php echo $message ?></p>

    <h1>Multiplicatiopn par 2</h1>
    <form action="index.php" method="post">
        <label for="number">Nombre</label>
        <input type="text" name="number" id="number" value="<?php $number ?>">
        <input type="submit" value="Calculer">
    </form>
    <p><?php echo $result ?></p>

    <h1>Nombres impairs</h1>
    <?php displayOddNumbers() ?>

    <h1>Nombres pairs</h1>
    <?php displayEvenNumbers2() ?>
</body>
</html>