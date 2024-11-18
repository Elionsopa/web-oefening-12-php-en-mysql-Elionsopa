<?php

include ('scripts/deelnemen.php');

function saveToDB() {
    $servername = "localhost";
    $username = "Elion";
    $password = "Elion1234";
    $dbname = "test";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO gebruikers (username,wachtwoord)
    VALUES ('" . $_POST["username"] . "', '" . $_POST["wachtwoord"].;
}
?>