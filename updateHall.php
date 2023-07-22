<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    require("connection.php");

    if (isset($_FILES['newPhoto'])) {
        // var_dump($_FILES['newPhoto']['full_path']);
        if ($_FILES['newPhoto']['full_path'] == "") {
            $nPo = "";
            $_SESSION["error_nophoto"] = "Photo is required *";
            header("Location: updateInfo.php");
            die();
        } else {
            $nPo = addslashes(file_get_contents($_FILES["newPhoto"]["tmp_name"])); //laFOTOOOOOOOOOOOOOO
        }
    }

    $nNa = $_POST["newName"];

    $nBi = $_POST["newBio"];

    $nPh = $_POST["newPhone"];

    $nEm = $_POST["newEmail"];

    $nPa = $_POST["newPass"];

    $dId = $_SESSION["info_id"];
    $dEmail = $_SESSION["info_email"];

    $repeatEmail = "SELECT * FROM users_info WHERE email = '$nEm' AND NOT id_info = '$dId';";
    $resultR = $mysqli->query($repeatEmail);
    $numR = $resultR->num_rows;

    if ($numR === 1) {
        $_SESSION["error_update"] = "This email already exist!";
        header("Location: updateInfo.php");
        die();
    }
    //nuevo Pass nuevo hash
    $nHash = password_hash($nPa, PASSWORD_DEFAULT);

    $update = "UPDATE users_info set photo = '$nPo', name = '$nNa',bio = '$nBi',phone = '$nPh',email = '$nEm',password = '$nHash'  WHERE id_info = '$dId';";

    $updateDatos = $mysqli->query($update);

    header("Location: infoHallLg.php");
}
