<?php

try {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nour_bank";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<span class=\"error\">Connection Failed or data already exists</span>";
}

?>




