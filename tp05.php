<?php 
$message = "";
if(!isset($_POST['prenom'])) {
    echo "Veuillez renseigner votre prénom";
} 

if(!isset($_POST['nom'])) {
    echo "Veuillez renseigner votre nom";
}

if(!isset($_POST['age'])) {
    echo "Veuillez renseigner votre age";
}

if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['age'])) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $age = $_POST['age'];
    setcookie('prenom', $prenom, time() + 365*24*3600, null, null, false, true);
    setcookie('nom', $nom, time() + 365*24*3600, null, null, false, true);
    setcookie('age', $age, time() + 365*24*3600, null, null, false, true);   
    $message = "Bonjour".$_COOKIE($prenom).$_COOKIE($nom)."tu as".$_COOKIE($age)."ans";
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
    <h1> <?= $message ?> </h1>

    
<form action="tp05.php" method="$_POST">
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom">
    <label for="age">Age</label>
    <input type="text" name="age" id="age">
    <input type="submit" value="Validerhj">
</form>
</body>
</html>