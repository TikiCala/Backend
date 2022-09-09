<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back End</title>
</head>

<body>
    <h1>Proyecto back</h1>

    <?php
    $mensaje = "Hola mundo";
    $entero1 = 40;
    $entero2 = 6;
    $gradosc = 20;
    $gradosf = (($gradosc * 9 / 5) + 32);
    $baserectangulo = 18;
    $alturarectangulo = 12;
    $perimetrorectangulo = ($baserectangulo * 2 + $alturarectangulo * 2);
    $arearectangulo = $baserectangulo * $alturarectangulo;
    $radiocirculo = 30;
    $pi = 3.14;
    $perimetrocirculo = 2 * $pi * $radiocirculo;
    $areacirculo = $pi * ($radiocirculo * $radiocirculo);

    ?>

    <?php
    echo $mensaje;
    ?>
    <br>
    <hr>

    <?php
    echo "Suma: ";
    echo $entero1 +  $entero2;
    ?>
    <br>
    <hr>

    <?php
    echo "Resta: ";
    echo $entero1 - $entero2;
    ?>
    <br>
    <hr>

    <?php
    echo "Multiplicación: ";
    echo $entero1 * $entero2;
    ?>
    <br>
    <hr>

    <?php
    echo "División: ";
    echo $entero1 / $entero2;
    ?>
    <br>
    <hr>

    <?php
    echo "Resto: ";
    echo $entero1 % $entero2;
    ?>
    <br>
    <hr>

    <?php
    echo "Grados Fahrenheit: ";
    echo $gradosf;
    ?>
    <br>
    <hr>

    <?php
    echo "Perímetro del rectángulo: ";
    echo $perimetrorectangulo;
    ?>
    <br>

    <?php
    echo "área del rectángulo: ";
    echo $arearectangulo;
    ?>

    <br>
    <hr>

    <?php
    echo "Perímetro del círculo: ";
    echo $perimetrocirculo;
    ?>
    <br>

    <?php
    echo "Área del círculo: ";
    echo $areacirculo;
    ?>



</body>

</html>