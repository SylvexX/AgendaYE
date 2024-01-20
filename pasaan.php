<html>
    <head>
        <title>Gegevens aanpassen</title>
    </head>
    <body>
        <?php

        require 'config.php';
        echo "<style>";
        include 'styles.css';
        echo "</style>";

        $id = $_GET['id'];

        echo "ID is: " . $id . "<br/>";

        $query = "SELECT * FROM crud_agenda WHERE ID = " . $id;

        $result = mysqli_query($mysqli, $query);

        if (mysqli_num_rows($result) > 0 ) {

            $item = mysqli_fetch_assoc($result);
            ?>
                <form name="agendaFormulier" method="post" action="aanpasVerwerk.php">
                    <input type="hidden" name="idVeld" value="<?php echo $item['ID'];?>"/>
                    <table>
                        <tr>
                            <td>Onderwerp:</td>
                            <td><input type="text" name="onderwerpVeld" value="<?php echo $item['Onderwerp'];?>"></td>
                        </tr>
                        <tr>
                            <td>Inhoud:</td>
                            <td><input type="text" name="inhoudVeld" value="<?php echo $item['Inhoud'];?>"></td>
                        </tr>
                        <tr>
                            <td>Begindatum:</td>
                            <td><input type="date" name="begindatumVeld" value="<?php echo $item['Begindatum'];?>"></td>
                        </tr>
                        <tr>
                            <td>Einddatum:</td>
                            <td><input type="date" name="einddatumVeld" value="<?php echo $item['Einddatum'];?>"></td>
                        </tr>
                        <tr>
                            <td>Prioriteit:</td>
                            <td><input type="number" name="prioriteitVeld" min="1" max="5" value="<?php echo $item['Prioriteit'];?>"></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>
                                <select name="statusVeld">
                                    <option value="n" <?php echo ($item['Status'] == 'n') ? 'selected': ''; ?> selected>Niet begonnen</option>
                                    <option value="b" <?php echo ($item['Status'] == 'b') ? 'selected': ''; ?>>Bezig</option>
                                    <option value="a" <?php echo ($item['Status'] == 'a') ? 'selected': ''; ?>>Afgerond</option>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="verzend" value="Item aanpassen"></td>
                        </tr>
                    </table>
                </form>
        <?php
        
        echo "OND: " .$item['Onderwerp'] . "<br/>";
        echo "INH: " . $item['Inhoud'] . "<br/>";
        echo "BEG: " . $item['Begindatum'] . "<br/>";
        echo "EIN: " . $item['Einddatum'] . "<br/>";
        echo "PRI: " . $item['Prioriteit'] . "<br/>";
        echo "STA: " . $item['Status'] . "<br/>";
        } else {
            echo "Er is geen record met ID: " . $id . "<br/>";
        }

        echo "<a href='toonagenda.php'> TERUG NAAR OVERZICHT</a>";

        ?>
    </body>
</html>