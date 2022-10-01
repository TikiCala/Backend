<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Ejercicio 1</h2>
    <?php
    $numerospares = ["0", "2", "4", "6", "8", "10"];
    foreach ($numerospares as $valor) {
        print  "$valor";
        echo "<br>";
    }
    ?>
    <br>
    <hr>
    <h2>Ejercicio 2</h2>
    <?php
    $matriz = ["Pedro", "Ana", "34", "1"];
    print_r($matriz);
    ?>
    <br>
    <?php 
    $asociativa=['nombre'=>"Pedro", 'apellido'=>"Torres", 'Dirección'=> "Av. Mayor 3703", 'Teléfono'=> "1122334455"];
    ?>
    <br>
    <hr>
    <h2>Ejercicio 4</h2>
    <?php 
    $ciudades1=["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
    print "La ciudad con el índice 0 tiene el nombre $ciudades1[0].";
    echo "<br>";
    print "La ciudad con el índice 1 tiene el nombre $ciudades1[1].";
    echo "<br>";
    print "La ciudad con el índice 2 tiene el nombre $ciudades1[2].";
    echo "<br>";
    print "La ciudad con el índice 3 tiene el nombre $ciudades1[3].";
    echo "<br>";
    print "La ciudad con el índice 4 tiene el nombre $ciudades1[4].";
    echo "<br>";
    print "La ciudad con el índice 5 tiene el nombre $ciudades1[5].";
    echo "<br>";
    ?>
    <br>
    <hr>
    <h2>Ejercicio 5</h2>
    <?php
    $ciudades2=['MD'=>"Madrid", 'BCL'=>"Barcelona", 'LD'=>"Londres", 'NY'=>"New York", 'LA'=>"Los Angeles", 'CCG'=>"Chicago"];
    print "El índice de $ciudades2[MD] es MD.";
    echo "<br>";
    print "El índice de $ciudades2[BCL] es BCL.";
    echo "<br>";
    print "El índice de $ciudades2[LD] es LD.";
    echo "<br>";
    print "El índice de $ciudades2[NY] es NY.";
    echo "<br>";
    print "El índice de $ciudades2[LA] es LA.";
    echo "<br>";
    print "El índice de $ciudades2[CCG] es CCG.";
    echo "<br>";
    ?>
</body>

</html>