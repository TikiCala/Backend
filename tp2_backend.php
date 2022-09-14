<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back End</title>
</head>

<body>
    <h2>consigna 1</h2>
    <?php
    $uno=2;
    if($uno>0){
        echo "$uno es un número positivo";
    }
    ?>
    <br>
    <hr>
    <h2>consigna 2</h2>
    <?php 
    $dos=7;
    if($dos>1 && $dos<10){
        echo "$dos es mayor a 1 y menor a 10";
    }
    ?>
    <br>
    <hr>
    <h2>consigna 3</h2>
    <?php 
    $tres=14;
    if($tres>10 || $tres<2){
        echo "$tres es mayor a 10";
    }
    ?>
    <br>
    <hr>
    <h2>consigna 4</h2>
    <?php 
    $numero1=43;
    $numero2=43;
    if($numero1>$numero2){
        echo "Suma: " . $numero1+$numero2;
        echo "<br>";
        echo "Resta: " . $numero1-$numero2;
    }
    elseif($numero2>$numero1){
        echo "Multiplicación: " . $numero1*$numero2;
        echo "<br>";
        echo "División: " . $numero2/$numero1;
        echo "<br>";
        echo "Resto de la división: " . $numero2%$numero1;
    }
    else{
        echo "Los números ingresados son iguales";
    }
    ?>

    



</body>

</html>