<?php
   $prixHT;
    $prixTTC;
    $message;
    $calculer;

    function calculTTC($prixHT){
        $prixTTC = $prixHT * 1.2;
        return $prixTTC;
       }

    if(isset($_POST['prixHT'])){
        $prixHT = $_POST['prixHT'];
        $prixTTC = calculTTC($prixHT);
        $message = "Le prix TTC est de $prixTTC";
    }
    else{
        $message = "Veuillez saisir un prix HT";
    }

    $number;
    $result;
    $seuil = 20;
    function multiplyByTwo($number){
        $result = $number * 2;
        return $result;
    }

    if(isset($_POST['number'])){
        $number = $_POST['number'];       
        if($number < $seuil){
            $result = multiplyByTwo($number);
        }
        else{
            $result = $number;
        }
    };   

    function displayOddNumbers(){
        for($i = 0; $i <= 100; $i++){
            if($i % 2 != 0){
                echo $i . "<br>";
            }
        }
    }
   ?>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>