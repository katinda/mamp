<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //  echo date("d/m/Y");
    // echo "Nous sommes le ".date("d/m/Y")."<br/>";
    // echo "Ajourd'hui c'est ".date("l"). "<br/>";
    // echo "Il est ".date("H:i:s")."<br/>";
    // echo date("d-m-Y,110000000");

    // ------------------------------------------------------------

    // $jour= array(
    //     "",
    //     "lundi",
    //     "mardi",
    //     "mercredi",
    //     "jeudi",
    //     "vendredi",
    //     "samedi",
    //     "dimanche"
    // );

    // $mois= array(
    //     "",
    //     "janvier",
    //     "février",
    //     "mars",
    //     "avril",
    //     "mai",
    //     "juin",
    //     "juillet",
    //     "aout",
    //     "septembre",
    //     "octobre",
    //     "novembre",
    //     "decembre"
    // );

    // $datefr=$jour[date("N")]." ".date("d")." ".$mois[date("n")]." ".date("Y");
    // echo "Nous sommes le ".$datefr;

    //-------------------------------------------------------------------------

    setlocale(LC_TIME,"fr_FR");
        echo "Nous sommes le ".strftime("%A %d %B %Y"). "<br/>";
    ?>
</body>
</html>