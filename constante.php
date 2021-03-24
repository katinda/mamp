<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // define("Bienvenue","Bienvenue sur mon site !");
        // echo Bienvenue;

    //-------------------------------------------------------------------
        // $a ="Bonjour";
        // define("NOMBRE",4);

        // function portee(){
        //     echo $a;
        //     echo NOMBRE;

        //     echo "<br/>";
        //     $b=36;
        //     echo $b;

        // }

        
        // portee();


    //----------------------------------------------------------------------
    
   echo  __LINE__ ."<br/>";

   function test(){
       echo __FUNCTION__."<br/>";
   }

   test();

   echo __FILE__."<br/>";
   echo __DIR__."<br/>";
   echo __LINE__

    ?>
</body>
</html>