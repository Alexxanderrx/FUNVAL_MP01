<?php
session_start();

if (!isset($_SESSION["datos"])) {
    require("nonautho.php");
    die();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <img src="./imgs/devchallenges.svg" />
        <ul>
            <li></li>
            <li></li>

        </ul>
    </div>

    <!-- <h1>Photo: </h1>
    <?php
    "<img src='data:image/jpg; base64," . base64_encode($_SESSION["info_photo"]) . "'>";
    ?> -->
    <h1>Name: <?php echo $_SESSION["info_name"] ?></h1>
    <h1>Bio: <?php echo $_SESSION["info_bio"] ?></h1>
    <h1>Phone: <?php echo $_SESSION["info_phone"] ?></h1>
    <h1>Email: <?php echo $_SESSION["info_email"] ?></h1>
    <h1>Password: <?php echo $_SESSION["info_password"] ?></h1>


</body>

</html>