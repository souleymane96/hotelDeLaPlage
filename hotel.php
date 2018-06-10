<?php
require_once "connexionPdo.php";

$connexionPdo = connexionPdo::getInstance();

$lesChambres = $connexionPdo->getLesChambres();
?>

<html>

<head>
    <meta charset="utf-8" />
    <title>Réservation hotel</title>
    <link rel="stylesheet" href="hotelPlage.css" />
</head>

<body>

    <div id="titre">
        <h1>Réserver votre chambre à l'Hotel de la Plage</h1>
    </div>

    <div id="listeChambres">
        <form method="POST" action="confirmation.php">
            <div id=tabListeChanmbre">
                <table border="1px">
                    <tr>
                        <th>Numero</th>
                        <th>Description</th>
                        <th>Personnes</th>
                        <th>Tarif</th>
                        <th>Reserver</th>
                    </tr>

                    <?php

                    foreach ($lesChambres as $uneChambre){
                        echo "<tr>";
                        echo "<td>".$uneChambre["numero"]."</td>";
                        echo "<td>".$uneChambre["description"]."</td>";
                        echo "<td>".$uneChambre["capacite"]."</td>";
                        echo "<td>".$uneChambre["tarif"]."</td>";
                        echo "<td><input type='submit' name='numChambre' value='Réserver'/>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </form>

    </div>

</body>






</html>