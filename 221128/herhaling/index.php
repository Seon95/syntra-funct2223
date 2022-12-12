<?php
 
 require("data.php");

?>

<html>

<body>
    <ul>
      <?php  foreach ($movies as $key => $movie) {
        //    echo `<li> <a href="detail.php">`. $movie[0] . `($movie[1]) </li>`;
        echo "<li> <a href=\"detail.php?id=$key\"> $movie[0] ($movie[1]) </li>";

        } 
        ?>
       
    </ul>
</body>
</html>