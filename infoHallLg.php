<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    $_SESSION["email_Lg"] = $_POST["emailLg"];
    $_SESSION["pass_Lg"] = $_POST["passLg"];

    $eLG = $_SESSION["email_Lg"];
    $pLG = $_SESSION["pass_Lg"];



    require("connection.php");
    $show = "SELECT * FROM users_info WHERE email = '$eLG' AND password = '$pLG';";

    $result = $mysqli->query($show);

    $numFilas = $result->num_rows;

    $datos = $result->fetch_assoc();
    $_SESSION["datos"] = $datos;
    $_SESSION["info_photo"] = $_SESSION["datos"]["photo"];
    $_SESSION["info_name"] = $_SESSION["datos"]["name"];
    $_SESSION["info_bio"] = $_SESSION["datos"]["bio"];
    $_SESSION["info_phone"] = $_SESSION["datos"]["phone"];
    $_SESSION["info_email"] = $_SESSION["datos"]["email"];
    $_SESSION["info_password"] = $_SESSION["datos"]["password"];
    if ($numFilas === 1) {

        header("Location: personalInfo.php");
    } else {
        header("Location: login.php");
        die();
    }
}
