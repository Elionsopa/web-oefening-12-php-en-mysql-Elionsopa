<?php
// informatie voor verzending

$ontvanger = 'test@localhost';
$onderwerp = 'Inschrijving fotowedstrijd';

//stel het bericht samen
$bericht = 'Naam: '.$_POST['naam'].'
Straat: '.$_POST['straat'].'
Gemeente: '.$_POST['postcode'].' '.$_POST['gemeente'].'
Telefoonnummer: '.$_POST['telefoon'].'
E-mail adres: '.$_POST['email'].'
Geboortedatum: '.$_POST['geboortedatum'].'

Camera: '.$_POST['camera'].'
Lens: '.$_POST['lens'].'
Commentaar: '.$_POST['commentaar'];

//header-informatie
$verzender = 'From: '.$_POST['naam'].' <'.$_POST['email'].'>';

//verzend bericht
mail($ontvanger, $onderwerp, $bericht, $verzender);
?>