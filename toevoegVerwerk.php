<?php
//is er een formulier verstuurd?
require 'config.php';
echo "<style>";
include 'styles.css';
echo "</style>";

// -> check of de knop is verstuurd:
if (isset($_POST['verzend'])){
    //lees alle velden uit en stop de waarden in variablene
    $ond = $_POST['onderwerpVeld'];
    $ing = $_POST['inhoudVeld'];
    $begin = $_POST['begindatumVeld'];
    $eind = $_POST['einddatumVeld'];
    $prior = $_POST['prioriteitVeld'];
    $stat = $_POST['statusVeld'];

    //Maak een toevoeg-quert (let op de verschilldende aanhalingstekens!);
    $query = "INSERT INTO crud_agenda";
    $query .= " (Onderwerp, Inhoud, Begindatum, Einddatum, Prioriteit, Status)";
    $query .= " VALUES ('{$ond}', '{$ing}', '{$begin}', '{$eind}', '{$prior}', '{$stat}')";

    //voer de quert uit en van het 'resultaat; op
    $result = mysqli_query($mysqli, $query);
    if ($result){
        echo "<div class=center_3>Het item is toegevoed</div>";
    } else {
        echo "FOUT! bij toevoegen";
        echo $query . "<br/>";
        echo mysqli_error($mysqli);
    }
    echo "<div class=center><a class=button href='toonagenda.php'> TERUG NAAR OVERZICHT</a></div>";
} else {
    echo "Het formulier is niet (goed) verstuurd<br/>";
} 