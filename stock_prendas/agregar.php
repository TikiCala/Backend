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
    $conexion = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "stock_prendas");

    $prenda = $_POST["prenda"];
    $marca = $_POST["marca"];
    $talle = $_POST["talle"];
    $precio = $_POST["precio"];
    $imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

    $consulta = "INSERT INTO ropa (id, prenda, marca, talle, precio, imagen)
    VALUES ('', '$prenda', '$marca', '$talle', '$precio', '$imagen')";

    mysqli_query($conexion,$consulta);

    header("location: index.html");
    ?>
</body>

</html>