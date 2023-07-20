<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    require("connection.php");
    $nNa = $_POST["newName"];
    $nBi = $_POST["newBio"];
    $nPh = $_POST["newPhone"];
    $nEm = $_POST["newEmail"];
    $nPa = $_POST["newPass"];

    require("connection.php");

    $dId = $_SESSION["info_id"];
    $dEmail = $_SESSION["info_email"];


    $update = "UPDATE users_info set name = '$nNa',bio = '$nBi',phone = '$nPh',email = '$nEm',password = '$nPa' AND password = '$pLG' WHERE id_info = '$dId';";

    $updateDatos = $mysqli->query($update);

    header("Location: infoHallLg.php");
}
