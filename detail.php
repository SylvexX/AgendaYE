<?php 

require 'config.php';
echo "<style>";
include 'styles.css';
echo "</style>";


$id = $_GET['id'];

echo "ID van het agenda-item is: " . $id . "<br/>";

$query = "SELECT * FROM crud_agenda WHERE ID = " . $id;

$result = mysqli_query($mysqli, $query);


if (mysqli_num_rows($result) > 0 ) {
    $item = mysqli_fetch_assoc($result);

echo $item['Onderwerp'] . "<br/>";
echo $item['Inhoud'] . "<br/>";
echo $item['Begindatum'] . "<br/>";
echo $item['Einddatum'] . "<br/>";
echo $item['Prioriteit'] . "<br/>";
echo $item['Status'] . "<br/>";
} else {
    echo "Er is geen record met ID: " . $id . "<br/>";
}

echo "<div class=center><a class=button href='toonagenda.php'> TERUG NAAR OVERZICHT</a></div>";
