<?php
    $servername = "localhost";
    $username = "u473293980_admin";
    $password = "Spokeaz1354%";
    $dbname = "u473293980_MyDB";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>