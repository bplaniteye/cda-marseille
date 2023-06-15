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
</body>
</html>