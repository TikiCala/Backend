<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Consigna 1:</h2>
    <?php
    $numero1 = 1;
    while($numero1 <= 100){
        echo $numero1;
        echo " ";
        $numero1= $numero1 + 1;
    }
    ?>
    <br>
    <hr>
    <h2>Consigna 2:</h2>
    <?php
    $numero2= 100;
    while($numero2>=1){
        echo $numero2;
        echo " ";
        $numero2= $numero2 - 1;
    }
    ?>
    <br>
    <hr>
    <h2>Consigna 3:</h2>
    <?php 
    for ($numero3=2; $numero3<=100; $numero3 = $numero3 + 2){
        echo $numero3;
        echo " ";
    }
    ?>
    <br>
    <hr>
    <h2>Consigna 4:</h2>
    <?php 
    for ($numero4=1; $numero4<=100; $numero4 = $numero4 + 2){
        echo $numero4;
        echo " ";
    }
    ?>
    <br>
    <hr>
    <h2>Consigna 5:</h2>
    <?php
    $v=2;
    for($i=1; $i<210; $v++){
        echo $i=$i + $v;
        echo " ";
    }
    ?>
    <br>
    <hr>
    <h2>Consigna 6:</h2>
    <?php
    $v=4;
    for($i=2; $i<110; $v= $v + 2){
        echo $i=$i + $v;
        echo " ";
    }
    ?>


</body>

</html>