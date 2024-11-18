<div class="jumbotron">
    <h1 class="display-4">Klaar om deel te nemen? Shoot!</h1>
</div>

<div class="row">
    <div class="col-md-1 hoofding">
        Naam:
    </div>
    <div class="col-md-11 invoer">
        <?php echo '<p>'.($_POST["naam"]) . '</p>'; ?>
    </div>
</div>

<div class="row">
    <div class="col-md-1 hoofding">
        Adres:
    </div>
    <div class="col-md-11 invoer">
        <?php echo '<p>'.($_POST["straat"]) . '</p>'; ?>
    </div>
</div>

<div class="row">
    <div class="col-md-1 hoofding">
        Gemeente:
    </div>
    <div class="col-md-11 invoer">
        <?php echo '<p>'.($_POST["gemeente"]) . '</p>'; ?>
    </div>
</div>

<div class="row">
    <div class="col-md-1 hoofding">
        Postcode:
    </div>
    <div class="col-md-11 invoer">
        <?php echo '<p>'.($_POST["postcode"]) . '</p>'; ?>
    </div>
</div>

<div class="row">
    <div class="col-md-1 hoofding">
        Telefoon:
    </div>
    <div class="col-md-11 invoer">
        <?php echo '<p>'.($_POST["phone"]) . '</p>'; ?>
    </div>
</div>

<div class="row">
    <div class="col-md-1 hoofding">
        Geboortedatum:
    </div>
    <div class="col-md-11 invoer">
        <?php echo '<p>'.($_POST["geboorte"]) . '</p>'; ?>
    </div>
</div>

<div class="row">
    <div class="col-md-1 hoofding">
        E-mail:
    </div>
    <div class="col-md-11 invoer">
        <?php echo '<p>'.($_POST["email"]) . '</p>'; ?>
    </div>
</div>

<div class="row">
    <div class="col-md-1 hoofding">
        Lens:
    </div>
    <div class="col-md-11 invoer">
        <?php echo '<p>'.($_POST["lens"]) . '</p>'; ?>
    </div>
</div>

<?php
$to = "test@localhost"; 
$subject = "Inzending formulier";  

$bericht = 'Naam: '.$_POST['naam'].'
Straat: '.$_POST['straat'].'
Gemeente: '.$_POST['gemeente'].' 
Postcode: '.$_POST['postcode'].'
Telefoonnummer: '.$_POST['phone'].'
E-mail adres: '.$_POST['email'].'
Geboortedatum: '.$_POST['geboorte'].'

Lens: '.$_POST['lens'].'
Commentaar: '.$_POST['comment'];

$headers = "From: Test User <test@localhost>";

$message = $bericht;
saveToDB();
if(mail($to, $subject, $message, $headers)) {
    echo "E-mail verzonden";
} else {
    echo "E-mail niet verzonden";
}

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
?>

