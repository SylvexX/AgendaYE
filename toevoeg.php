<?php 
//Voeg de databse-verbinding toe
require 'config.php';

//maak een toevoeg-query (let op de verschillende aanhalingsteek!)
$query = "INSERT INTO crud_agenda";
$query .= " (Onderwerp, Inhoud, Begindatum, Einddatum, Prioriteit, Status)";
$query .= " VALUES (PROCES2, ERD Opdrachten afronden, 2022-10-20, 2022-10-27, 2, 'b')";

// $query = "INSER INTO crud_agenda VALUES (NULL, 'Rekenen', 'Toets', '2021-04-26', '2021-04=27', 3, '2')";

//Voor de query uit en vang het 'resultaat' op 
//LET OP: het resultaat geeft aan of het wel of niet is gelukt ('true'/'false')
$result = mysqli_query($mysqli, $_query);

//controleer of het is gelukt;'
if ($result) {
    echo "het item is toegevoegd<br/>";
} else {
    echo "FOUT bij toevoegen<br/>";
    echo mysqli_error($mysqli);
};

//terug naar het overzicht
echo "<a href='toonagenda.php'>terug</a>";