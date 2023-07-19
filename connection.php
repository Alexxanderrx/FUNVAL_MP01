<?php
try {
    $mysqli = new mysqli("localhost", "root",  "", "mp_01");
} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
};
