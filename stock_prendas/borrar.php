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

    $id = $_GET['id'];

    $consulta= "DELETE FROM ropa WHERE id=$id";

    mysqli_query($conexion,$consulta);

    header("location: index.html");


    ?>
</body>

</html>