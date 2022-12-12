<?php
$errors = [];

/* POST ipv GET is beter , dan zie je dat niet op url */
if(!empty($_GET["name"])){
   $name = $_GET["name"];
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
  $errors[] = "Only letters and white space allowed";
}
}
if(!empty($_GET["mail"])){
    $mail = $_GET["mail"];
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    
    
 }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nieuwsbrief formulier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <h1>Nieuwsbrief</h1>
   
    <?php 
    if(count($errors) > 0){
        echo "<ul>";
        foreach ($errors as $error) {
            print "<li>$error</li>";
           
        }
        echo "</ul>";
    }
    ?>


    <form method="$_GET" action="index.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="mail">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" id="exampleInputName" placeholder="Name" name="name" value="<?php echo (isset($name)? ($name) : ""); ?>">

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  </body>
</html>