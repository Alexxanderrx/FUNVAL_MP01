<?php
session_start();
require("connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //si es POST inicia secion con email y pass
    $_SESSION["email_Lg"] = $_POST["emailLg"];
    $_SESSION["pass_Lg"] = $_POST["passLg"];

    $eLG = $_SESSION["email_Lg"];
    $pLG = $_SESSION["pass_Lg"];
    $show = "SELECT * FROM users_info WHERE email = '$eLG' AND password = '$pLG';";
} else {
    //si NO es POST inicia secion con id
    $dId = $_SESSION["info_id"];
    $show = "SELECT * FROM users_info WHERE id_info = '$dId';";
}

$result = $mysqli->query($show);
$datos = $result->fetch_assoc();
// $numFilas = $result->num_rows;

$_SESSION["datos"] = $datos;
$_SESSION["info_id"] = $_SESSION["datos"]["id_info"];
$ssId = $_SESSION["info_id"];


$showId = "SELECT * FROM users_info WHERE id_info = '$ssId'";

$resultId = $mysqli->query($showId);
$datosId = $resultId->fetch_assoc();
$_SESSION["datosId"] = $datosId;

$numFilas = $resultId->num_rows;

$_SESSION["info_photo"] = $_SESSION["datosId"]["photo"];
$_SESSION["info_name"] = $_SESSION["datosId"]["name"];
$_SESSION["info_bio"] = $_SESSION["datosId"]["bio"];
$_SESSION["info_phone"] = $_SESSION["datosId"]["phone"];
$_SESSION["info_email"] = $_SESSION["datosId"]["email"];
$_SESSION["info_password"] = $_SESSION["datosId"]["password"];
if ($numFilas === 1) {

    header("Location: personalInfo.php");
} else {
    $_SESSION["error_lg"] = "La cuenta no existe.";
    header("Location: login.php");
    die();
}
