<?php

include ('scripts/functions.php');

function saveToDB() {
    $servername = "localhost";
    $username = "Elion";
    $password = "Elion1234";
    $dbname = "test";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO wedstrijd (naam, straatnr, postcode, gemeente, telefoonnummer, email, geboortedatum, lens)
    VALUES ('" . $_POST["naam"] . "', '" . $_POST["straat"] . "', '" . $_POST["postcode"] . "', '" . $_POST["gemeente"] . "', '" . $_POST["phone"] . "',
     '" . $_POST["email"] . "', '" . $_POST["geboorte"] . "', '" . $_POST["lens"] . "')";
    
    echo $sql;
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}