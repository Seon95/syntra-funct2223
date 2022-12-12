
<?php
 
 require("data.php");



$id = 0;
if(!empty($_GET["id"])){
   $id = $_GET["id"];
}



 ?>
<html>
    <body>
        <h1> <?php echo $movies[$id][0] ?> </h1>
        <h7> <?php echo $movies[$id][1] ?> </h7>
       <div> 
        <img src="<?php echo $movies[$id][2] ?>" width="200"  alt="">  </div>
    </body>
</html>