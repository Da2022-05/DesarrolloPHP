<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       //impresiones de texto
        echo "<h1>Hola mundo</h1>";

       //variables
        $nombre = "Diana Avila";
        $edad = 15;

        echo '<h3>'.$nombre.' edad: '.$edad.' años </3>';

        $edad += 10;
        echo '<h3>'.$edad.'</h3>';

        if($edad > 17){
           echo '<h3>Es mayor de edad</h3>';
        } else {
          echo '<h3>Es menor de edad</h3>';
        }

        //iteraciones en PHP
        for ($i = 1; $i <= 5; $i++){
          echo '<h5>iteracion No'.$i.'</h5>';
      }

      //funciones

       function sayHI(){
         echo '<h2>holis</h2>';
       }

       function suma(){
          $num1 = 5;
          $num2 = 10;

          return $num1 + $num2;

       }

       sayHi();

       echo suma(). "\n";


       $array = array(
         0 => "Jeimmy",
         1 => "Kimberly",
         2 => "Kenny"
       );

       for($j = 0; $j < 3; $j++){
         echo $array[$j]."\n";
       }


    ?>

   
</body>
</html>