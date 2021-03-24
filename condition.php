<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       // $heure_connexion = 12;
       //$heure_connexion = 20;
    //    $heure_connexion = 17;
    //     if($heure_connexion < 18){
    //         echo "passez une bonne journée";
    //         $journée = "oui";
    //     }
    //     else{
    //         echo "passez une bonne soirée";
    //         $journée ="non";
    //     }

    //     echo 'fait-il jour ? la réponse est '.$journée.'.';

    // -----------------------------------------------------------

    // $note = 12 ;
    // if($note<10){
    //     echo "Vous n'avez pas eu la moyennes ";
    // }
    // elseif($note=10){
    //     echo "vous avez juste la moyenne";
    // }
    // else{
    //     echo "vous avez eu plus de la moyenne ";
    // }

    // ------------------------------------------------------------
    // $note = 11 ;
    // $difficulté = "moyen";
    // if($note<=12 AND $difficulté=="facile"){
    //     echo "c'est nul !";
    // }
    // elseif($note>12 AND $difficulté=="facile"){
    //     echo "Pas mal, mais c'était facile";
    // }
    // elseif ($note<=12 AND $difficulté=="difficile"){
    //     echo "Ne vous découragez pas, c'était difficile  ";
    // }
    // else{
    //     echo "Bravo !";
    // }

    // if($difficulté == "facile" OR $difficulté == "moyen"){
    //     echo " <br/> Ce controle n'était pas difficile";
    // }
    // else{
    //     echo "<br/> Ce controle était dur, non ? ";
    // }

    // ------------------------------------------------------------

    // $note=20;

    // if($note == 0){
    //     echo "Tu es nul !";
    // }
    // elseif($note == 4){
    //     echo "c'est très mauvais";
    // }
    // elseif($note == 8){
    //     echo "ce n'est pas bon";
    // }
    // elseif($note == 12){
    //     echo "c'est bien";
    // }
    // elseif($note == 16){
    //     echo "Bien joué";
    // }
    // elseif($note == 20){
    //     echo "Parfait !";
    // }
    // else{
    //     echo "Je n'ai pas de commentaire pour cette note";
    // }

    //---------------------------------------------------------------

    // switch($note){
    //     case 0:
    //         echo "Tu es nul !";
    //     break;
    //     case 4:
    //         echo "C'est très mauvais ";
    //     break;
    //     case 8:
    //         echo "Ce n'est pas bon";
    //     break;
    //     case 12:
    //         echo "C'est moyen";
    //     break;
    //     case 16:
    //         echo "Bien joué";
    //     break;
    //     case 20:
    //         echo "Parfait !";
    //     break;
    //     default :
    //     echo "Je n'ai pas de commentaire pour cette note";
    // }

    //-----------------------------------------------------------------

    // $étudiant = true; 

    // if($étudiant == true){
    //     echo "Vous êtes étudiant <br/>";
    // }
    // else{
    //     echo "Vous n'êtes pas étudiant <br/>";
    // }


    // if($étudiant){
    //     echo "Vous êtes étudiant <br/>";
    // }
    // else{
    //     echo "Vous n'êtes pas étudiant <br/>";
    // }

    // if(! $étudiant){
    //     echo "Vous n'êtes pas étudiant <br/> ";
    // }
    // else{
    //     echo "Vous êtes étudiant <br/> ";
    // }

    //---------------------------------------------------------------------
    $age = 24;

    if($age>=18){
        $autorisation = true;
    }
    else{
        $autorisation = false;
    }

    
    $autorisation = ($age >=18)? true : false;
    

    ?>
</body>
</html>