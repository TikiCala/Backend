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
    $mensaje= "Hola mundo";

    echo $mensaje;

    $entero1 = 40;
    $entero2 = 6;
    $gradosc = 20;
    $gradosf = (($gradosc * 9/5) + 32);
    $baserectangulo = 18;
    $alturarectangulo = 12;
    $perimetrorectangulo = ($baserectangulo*2 + $alturarectangulo*2);
    $arearectangulo = $baserectangulo*$alturarectangulo;
    $radiocirculo = 30;
    $pi = 3.14;
    $perimetrocirculo = 2*$pi*$radiocirculo;
    $areacirculo = $pi*($radiocirculo*$radiocirculo);

    echo $perimetrocirculo;

    ?>
</body>

</html>