<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    require("connection.php");
    if (isset($_FILES['newPhoto'])) {
        $nPo = addslashes(file_get_contents($_FILES["newPhoto"]["tmp_name"])); //laFOTOOOOOOOOOOOOOO
    }
    $nNa = $_POST["newName"];
    $nBi = $_POST["newBio"];
    $nPh = $_POST["newPhone"];
    $nEm = $_POST["newEmail"];
    $nPa = $_POST["newPass"];

    $dId = $_SESSION["info_id"];


    $update = "UPDATE users_info set photo = '$nPo', name = '$nNa',bio = '$nBi',phone = '$nPh',email = '$nEm',password = '$nPa'  WHERE id_info = '$dId';";

    $updateDatos = $mysqli->query($update);

    header("Location: infoHallLg.php");
}
