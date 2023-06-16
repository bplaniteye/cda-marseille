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

    function displayOddNumbers2(){
        $i = 0;
        while($i <= 100){
            if($i % 2 != 0){
                echo $i . "<br>";
            }
            $i++;
        }
    }

    function displayOddNumbers3(){
        $i = 0;
        do{
            if($i % 2 != 0){
                echo $i . "<br>";
            }
            $i++;
        }while($i <= 100);
    }

    function displayEvenNumbers(){
        for($i = 0; $i <= 100; $i++){
            if($i % 2 == 0){
                echo $i . "<br>";
            }
        }
    }

    function displayEvenNumbers2(){
        $i = 0;
        while($i <= 100){
            if($i % 2 == 0){
                echo $i . "<br>";
            }
            $i++;
        }
    }
    
   ?>