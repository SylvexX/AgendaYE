<?php 

require 'config.php';
echo "<style>";
include 'styles.css';
echo "</style>";

if (isset($_POST['verzend'])){
    $id      = $_POST['idVeld'];
    $ond     = $_POST['onderwerpVeld'];
    $ing     = $_POST['inhoudVeld'];
    $begin   = $_POST['begindatumVeld'];
    $eind    = $_POST['einddatumVeld'];
    $prior   = $_POST['prioriteitVeld'];
    $stat    = $_POST['statusVeld'];

    $query   = "UPDATE crud_agenda";
    $query  .= " SET Onderwerp = '{$ond}', Inhoud = '{$ing}', Begindatum = '{$begin}',";
    $query  .= " Einddatum = '{$eind}', Prioriteit = {$prior}, Status = '{$stat}'";
    $query  .= " WHERE ID = {$id}";

    $result = mysqli_query($mysqli, $query);
    if ($result){
        echo "Het item is aangepast<br/>";
        echo "<a href='toonagenda.php'> TERUG NAAR OVERZICHT</a>";
    } else {
        echo "FOUT bij aanpassen:<br/>";
        echo $query . "<br/>";
        echo mysqli_error($mysqli);
        echo "<a href='toonagenda.php'> TERUG NAAR OVERZICHT</a>";
    }
}