<?php

$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "stock_prendas");

$id = $_GET['id'];

$consulta = "SELECT * FROM ropa WHERE id=$id";

$respuesta = mysqli_query($conexion, $consulta);

$datos = mysqli_fetch_array($respuesta);
?>
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
    $prenda = $datos["prenda"];
    $marca = $datos["marca"];
    $talle = $datos["talle"];
    $precio = $datos["precio"];
    $imagen = $datos["imagen"];
    ?>


    <h2>Modificar</h2>
    <p>Ingrese los nuevos datos de la prenda.</p>

    <form method="post" action="" enctype="multipart/form-data">
        <label>Tipo de prenda</label>
        <input type="text" name="prenda" value="<?php echo "$prenda"; ?>">
        <label>Marca</label>
        <input type="text" name="marca" value="<?php echo "$marca"; ?>">
        <label>Talle</label>
        <input type="text" name="talle" value="<?php echo "$talle"; ?>">
        <label>Precio</label>
        <input type="text" name="precio" value="<?php echo "$precio"; ?>">
        <label>Imagen</label>
        <input type="file" name="imagen">
        <input type="submit" name="guardar_cambios" value="Guardar cambios">
        <button type="submit" name="cancelar" formaction="index.html">Cancelar</button>
    </form>

    <?php
    if (array_key_exists('guardar_cambios', $_POST)) {

        $conexion = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($conexion, "stock_prendas");

        $prenda = $_POST['prenda'];
        $marca = $_POST['marca'];
        $talle = $_POST['talle'];
        $precio = $_POST['precio'];
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        $consulta = "UPDATE ropa SET prenda= '$prenda', marca= '$marca', talle= '$talle', precio= '$precio', imagen= '$imagen' WHERE id= $id";

        mysqli_query($conexion, $consulta);

        header("location: index.html");
    }
    ?>
</body>

</html>