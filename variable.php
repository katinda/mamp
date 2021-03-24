<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //  $departement = "var";
    //  $chiffre = 83;

    //  echo "le $departement est un département de France </br>";
    //  echo "le  ". $departement." est un département de France </br>";
    //  echo $chiffre;

    // -------------------------------------------------------------------

    $nombre1 = 5;
    $nombre2 = 3;

    $addition = $nombre1 + $nombre2;
    $soustraction = $nombre1 - $nombre2;
    $multiplication = $nombre1 * $nombre2;
    $division = $nombre1 / $nombre2;
    $module = $nombre1 % $nombre2;


    echo "Addition :". $addition ."<br/>" ;
    echo "Soustraction :". $soustraction ."<br/>" ;;
    echo "Multiplication :". $multiplication ."<br/>" ;;
    echo "Division :". $division ."<br/>" ;;
    echo "Modulo :". $module ."<br/>" ;;

    echo $nombre1."+".$nombre2. "<br/>";

    $addition =20;

    $soustraction = $soustraction - $soustraction;
    $multiplication = $addition; 

    echo "Nouvelle valeur addition : ".$addition. "<br/>"; 
    echo "Nouvelle valeur soustraction : ".$soustraction. "<br/>"; 
    echo "Nouvelle valeur multiplication : ".$multiplication. "<br/>"; 

    ?> 
</body>
</html>