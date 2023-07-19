<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    $_SESSION["email_usuario"] = $_POST["email"];
    $_SESSION["pass_usuario"] = $_POST["pass"];

    $email_u = $_SESSION["email_usuario"];
    $pass_u = $_SESSION["pass_usuario"];



    require("connection.php");

    $insertarUsers = "INSERT INTO users (email, password) VALUES ('$email_u','$pass_u');";

    $insertarUsers_Info = "INSERT INTO users_info (email, password) VALUES
    ('$email_u','$pass_u');";

    $ejecutarDatos = $mysqli->query($insertarUsers);
    $ejecutarDatos2 = $mysqli->query($insertarUsers_Info);


    $showInfo = "SELECT * FROM users_info WHERE email = '$email_u' AND password = '$pass_u';";

    $resultado = $mysqli->query($showInfo);

    // $numFilas = $resultado->num_rows;

    $datos = $resultado->fetch_assoc();
    $_SESSION["datos"] = $datos;

    // if ($numFilas === 1) {
    $_SESSION["info_photo"] = $_SESSION["datos"]["photo"];
    $_SESSION["info_name"] = $_SESSION["datos"]["name"];
    $_SESSION["info_bio"] = $_SESSION["datos"]["bio"];
    $_SESSION["info_phone"] = $_SESSION["datos"]["phone"];
    $_SESSION["info_email"] = $_SESSION["datos"]["email"];
    $_SESSION["info_password"] = $_SESSION["datos"]["password"];

    header("Location: personalInfo.php");
    // }
}
