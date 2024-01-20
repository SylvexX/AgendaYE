<?php

include "config.php";
echo "<style>";
include 'styles.css';
echo "</style>";

$id = $_GET['id'];
    

echo "Item met ID " . $id . " word verwijderd....<br/>";

$query = "DELETE FROM crud_agenda WHERE ID = " . $id;

$result = mysqli_query($mysqli, $query);

if ($result) {
    echo "Het item is verwijderd<br/>";
    echo "<div class=center><a class=button href='toonagenda.php'> TERUG NAAR OVERZICHT</a></div>";
} else {
    echo "FOUT bij verwijderen<br/>";
    echo $query . "<br/>";
    echo mysqli_error($mysqli);
}