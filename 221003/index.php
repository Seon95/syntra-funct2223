<?php 

// Mijn variabelen... (ook met # mogelijk) , of voor grote teksten /* en eindigen met */

    $voornaam = "Maro";
    $achternaam = "ajrtirah";
    $getal1 = 5;
    $getal2 = 7;
    $getal3 = $getal1 + 1;
    $getal3 = $getal3 + 1;
    $getal3 += 1; //getal3 + 1
    $getal3++; // getal3+1
    $getal3 = NULL; // vanaf hier is getal 3 gereset 
    //$sum = $getal2 + $getal1;
    ?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
  
  <?php
        echo "<p>Hallo " . $voornaam . " ". $achternaam . " , </p>";
        echo "<p>$getal1 + $getal2</p>";
        echo "<p>" . $getal1 + $getal2 . "</p>";

        echo '<p>' . $getal1 . '</p>';
        echo '<p>' . ucfirst($achternaam) . '</p>';
        echo "<h3>" . $getal3 .  "</h3>";

        
  ?>


</body>
</html>