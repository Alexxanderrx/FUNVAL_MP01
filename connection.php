<?php
$hostName = "localhost";
$user = "root";
$pass = "";
$db = "pc_00";
$enlace = mysqli_connect($hostName, $user, $pass, $db);
if (!$enlace) {
    echo "Error de Conexion";
};
