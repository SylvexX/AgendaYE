<?php
// voeg de atabe-verbinding toe
require 'config.php';
echo "<style>";
include 'styles.css';
echo "</style>";

//maak de query
$query = "SELECT * FROM crud_agenda";

//voer de query uit, en vang het resultaat op
$result = mysqli_query($mysqli, $query);

//Als er record zijn...
if (mysqli_num_rows($result) > 0) {
	echo "<table border='1px'>";
	echo "<tr><th>Details</th><th>Onderwerp</th><th>Inhoud</th><th>Verwijder</th><th>Pasaan</th></tr>";

	while ($item = mysqli_fetch_assoc($result))
	{
		// "<a href='detail.php?id=" . $item['ID'] . "'>Detail</a>   "
		// echo "<td>" . "<a href='detail.php?id=" . $item['ID'] . "'>Detail</a>   " . $item['Onderwerp'] . "</td>";
		echo "<tr>";
			echo "<td>" . "<a href='detail.php?id=" . $item['ID'] . "'>Detail</a>";
			echo "<td>" . $item['Onderwerp'] . "</td>";
			echo "<td>" . $item['Inhoud'] . "</td>";
			echo "<td>" . "<a href='verwijder.php?id=" . $item['ID'] . "'>Verwijder</a>";
			echo "<td>" . "<a href='pasaan.php?id=" . $item['ID'] . "'>Pasaan</a>";
		echo "</tr>";
	}

	echo "</tr>";;
	echo "<div class=center_1><a class=button href='toevoegForm.html'>Maak nieuw agenda-item aan</a></div>";

} else {
	//als er geen record zijn.... print dan.
	echo "<p>Geen items gevonden!</p>";
};

if (!$result) {
	echo "<p>FOUT!</p>";
	echo "<p>" . $query . "</p>";
	echo "<p>" . mysqli_error($mysqli) . "</p>";
	exit;
}