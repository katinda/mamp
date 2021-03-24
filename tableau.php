<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //  $me = array(
    //     'age'	=> 45 , 
    //     'firstname' 		=> 'Alexandre' ,
    //     'lastname' 	  		=> 'Plennevaux' ,
    //     'favourite_movies' 	=> array('My Own Private Idaho', 'Her', 'Matrix')
    // );
    
    // echo '<pre>';
    // print_r($me);
    // echo '</pre>';


    //------------------------------------------------------------

    // $famille = ["a","b","c","d"];
    // $recette = ["banane","cornichon","salade","gateau"];
    // $film = ["static et choc","taken","think a like man","Mr.deputé"];
    
    // $film[O];

    // print_r($famille);
    // echo "<br/>";
    // print_r($recette);
    // echo "<br/>";
    // print_r($film);
    // echo "<br/>";
    // var_dump($famille);
    // echo "<br/>";
    // echo "$film[0]";
    // echo "<br/>";
  
    //------------------------------------------------------------

    // $prenoms = array ("Pierre","Paul","Jaques");
        
    //     for($i =0; $i<=2;$i++){
    //         echo $prenoms[$i]."<br/>";
    //     }

    //     foreach($prenoms as $items){
    //         echo $items."<br/>";
    //     }

    // $age = array (
    //     "Pierre" => 24,
    //     "Paul"=>22,
    //     "Jacques"=>"non renseigné");

    //     foreach($age as $valeurs){
    //         echo $valeurs."<br/>";
    //     }

    //     echo $prenoms[0]."<br/>";
    //     echo $age["Pierre"]."<br/>";

    //     foreach($age as $clef => $valeurs){
    //         echo "l'age de  " .$clef. "  est  ". $valeurs."</br>";
    //     }
        
    //     echo '<pre>';
    //     print_r($age);
    //     echo '</pre>';

    //---------------------------------------------------------------------
        $membres = array(
            array("Pierre",24,"pierre.giraud@edhec.com"),
            array("Paul",22,"paul.dubreuil@live.com"),
            array("Pierre",36,"jacquot@gmail.com"),
        );

        echo $membres [0][0]." a ".$membres[0][1]." ans. Son mail est : ".$membres [0][2]. "<br/>";
        echo $membres [1][0]." a ".$membres[1][1]." ans. Son mail est : ".$membres [1][2]. "<br/>";
        echo $membres [2][0]." a ".$membres[2][1]." ans. Son mail est : ".$membres [2][2]. "<br/>";


        for($ligne = 0;$ligne < 3;$ligne++){
            $membre_no = $ligne+1;
            echo "Membre numéro " .$membre_no."<br/>";
            echo "<ul>";
            for($col = 0;$col < 3;$col++){
                echo "<li>" .$membres[$ligne][$col]. "</li>";
            }
            echo "</ul>";
        }
    ?>

    
</body>
</html>