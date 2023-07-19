<!DOCTYPE html>
<html>

<head>
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<?php
$hostName = "localhost";
$user = "root";
$pass = "";
$db = "pc_00";
//Manejar un error de conexion
try {
    $mysqli = new mysqli($hostName, $user, $pass, $db);

    $query = "SELECT * FROM user_e";

    $resultado = $mysqli->query($query);
    // print_r($resultado);

    if ($resultado) {
        while ($fila = $resultado->fetch_assoc()) {
            print_r($fila);
            echo "</br>";
        }
    }
} catch (mysqli_sql_exception $e) {
    echo "Error de conexión: " . $e->getMessage();
};

$idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if ($idioma == "es") {
    $saludo_lg = "Iniciar Sesion";
    $u_lg = "Usuario";
    $p_lg = "Contrase&#241;a";
} else {
    $saludo_su = "Log In";
    $u_lg = "User";
    $p_lg = "Password";
};
?>

<body>
    <form name="formularioLogIn" method="post" action="loby.php" class="box01">
        <h1><?php echo $saludo_lg ?></h1>
        <div class="boxData">
            <div>
                <p><?php echo $u_lg ?> :</p>
                <input type="text" name="user" />
            </div>
            <div>
                <p><?php echo $p_lg ?> :</p>

                <div class="boxPass">
                    <input type="text" name="pass">
                    <button onclick="enter">00</button>
                </div>

            </div>
        </div>
        <button class="btnLg">Inicia Sesión</button>
        <a href="/index.php">Volver</a>

    </form>
    <?php
    //your PHP code goes here
    ?>
    <!-- <b>Here is some more HTML</b> -->
    <?php
    //more PHP code
    ?>

</body>

</html>