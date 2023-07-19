<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: black; color:white">
    <?php
    $input_u = $_POST['user'];
    $input_p = $_POST['pass'];
    echo "<h2>Usuario Registrado :<h2/>" . $input_u . "<br/><h2>Contraseña Registrado :<h2/>" . $input_p;

    $hostName = "localhost";
    $user = "root";
    $pass = "";
    $db = "pc_00";
    //Manejar un error de conexion
    try {
        $mysqli = new mysqli($hostName, $user, $pass, $db);

        $query = "SELECT * FROM user_admin WHERE user = '" . $input_u . "' AND pass = '" . $input_p . "'";

        $resultado = $mysqli->query($query);
        // print_r($resultado);

        if ($resultado) {
            while ($fila = $resultado->fetch_assoc()) {
                // echo "</br>";
                // print_r($fila);
                // echo "</br>";
    ?>
                <div>
                    <h1>Has entrado desde una cuenta admin.</h1>
                </div>
    <?php
            }
        }
    } catch (mysqli_sql_exception $e) {
        echo "Error de conexión: " . $e->getMessage();
    };
    ?>
</body>

</html>