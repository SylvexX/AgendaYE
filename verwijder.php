<?php 

echo "<style>";
include 'styles.css';
echo "</style>";

$id = $_GET['id'];
//als er een id is doe dan
if ($id !="") {
    echo "verwijder item met ID:" . $id . "<br/>";

    echo "<p>Weet je het zeker, dat je het wilt verwijderen?</p>";


    echo "<p><div class=center_2_1><a class=button href='verwijder_verwerk.php?id={$id}'>JA! verwijder</a></div></p>";
    echo "<p><div class=center_2><a class=button href='toonagenda}'>Nope (nog even denk tijd)</a></div></p>";
} else {
    echo "geen id gevonden...<br/>";
}