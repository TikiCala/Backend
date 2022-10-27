<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Stock prendas de ropa</h1>
    <button type="submit"><a href="./index.html">Inicio</a></button>
    <button type="submit"><a href="./listar.php">Listar ropa</a></button>
    <button type="submit"><a href="./agregar.html">Agregar prenda</a></button>
    <h2>Lista</h2>
    <p>la siguiente lista muestra los datos de la ropa actualmente en stock</p>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>TIPO DE PRENDA</th>
            <th>MARCA</th>
            <th>TALLE</th>
            <th>PRECIO</th>
            <th>IMAGEN</th>
            <th>EDITAR</th>
            <th>BORRAR</th>
        </tr>

        <?php
        $conexion = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($conexion, "stock_prendas");

        $consulta = "SELECT*FROM ropa";

        $datos = mysqli_query($conexion, $consulta);


        while ($fila = mysqli_fetch_array($datos)) { ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['prenda']; ?></td>
                <td><?php echo $fila['marca']; ?></td>
                <td><?php echo $fila['talle']; ?></td>
                <td><?php echo $fila['precio']; ?></td>
                <td><img src="data:image/jpeg;base64, <?php echo base64_encode($fila['imagen'])?>" alt="" width="100px" height="100px"></td>
                <td><a href="./modificar.php?id=<?php echo $fila['id']; ?>">Editar</a></td>
                <td><a href="./borrar.php?id=<?php echo $fila['id']; ?>">Borrar</a></td>
                
            </tr>
        <?php }
        ?>
        </table>
</body>

</html>