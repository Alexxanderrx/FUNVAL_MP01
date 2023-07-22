<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    $_SESSION["email_usuario"] = $_POST["email"];
    $_SESSION["pass_usuario"] = $_POST["pass"];

    $email_u = $_SESSION["email_usuario"];
    $pass_u = $_SESSION["pass_usuario"];

    require("connection.php");
    // Hashear el password
    $hash = password_hash($pass_u, PASSWORD_DEFAULT);

    //en caso que intente logearse desde el register o tenga el mismo email:v
    $sameEmail = "SELECT * FROM users_info WHERE email = '$email_u'";

    $resultTryLg = $mysqli->query($sameEmail);
    $datosTryLg = $resultTryLg->fetch_assoc();
    $datosTryLgPass = $datosTryLg["password"];

    if (password_verify($pass_u, $datosTryLgPass)) {

        // }

        //     $tryLog = "SELECT * FROM users_info WHERE email = '$email_u' AND password = '$datosTryLgPass';";
        // $tryResult = $mysqli->query($tryLog);

        // $numFilas = $tryResult->num_rows;
        // if ($numFilas === 1) {
        $_SESSION["error_rg"] = "Are you trying to login?";
        header("Location: index.php");
        die();
    } else {
        $trySame = $mysqli->query($sameEmail);

        $numFilasS = $trySame->num_rows;

        if ($numFilasS === 1) {
            $_SESSION["error_rg"] = "This account already exist.";
            header("Location: index.php");
            die();
        } else {
            $insertarUsers_Info = "INSERT INTO users_info (email, password) VALUES
            ('$email_u','$hash');";

            $ejecutarDatos = $mysqli->query($insertarUsers_Info);

            $showInfo = "SELECT * FROM users_info WHERE email = '$email_u' AND password = '$hash';";

            $resultado = $mysqli->query($showInfo);

            $datos = $resultado->fetch_assoc();
            $_SESSION["datos"] = $datos;

            $_SESSION["info_id"] = $_SESSION["datos"]["id_info"];
            $_SESSION["info_photo"] = $_SESSION["datos"]["photo"];
            $_SESSION["info_name"] = $_SESSION["datos"]["name"];
            $_SESSION["info_bio"] = $_SESSION["datos"]["bio"];
            $_SESSION["info_phone"] = $_SESSION["datos"]["phone"];
            $_SESSION["info_email"] = $_SESSION["datos"]["email"];
            $_SESSION["info_password"] = $_SESSION["datos"]["password"];

            header("Location: personalInfo.php");
        }
    }
}
