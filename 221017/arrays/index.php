<?php
/*
$txt = "dit is een tekst";
$num = 123;
var_dump($txt); 
echo "<br />";
var_dump($num); */

$kristof = ["kristof", "grenson", "m"];
$evelien = ["Evelien", "Hofmans", "f"];
$david = ["David", "Verhulst", "m"];
$karim = ["Karim", "Dehbi", "m"];

$users = [$kristof, $evelien, $david, $karim];

/*
$fruits = ["apple","kiwi","banaan"];
$fruits[3]= "mango";

echo "<pre>";
echo $fruits;
var_dump($fruits);
print_r($fruits);
print "</pre>"; */

/*

for ($i=0; $i < count($fruits); $i++) { 
    echo $fruits[$i];
    echo "<br />" ; 
}


foreach ($users as $key => $value) {
    echo $value;
    echo "<br>" ;
}
*/
?>


<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col"></th>
        <th scope="col">Naam</th>
        <th scope="col">Geslacht</th>
      </tr>
    </thead>
    <tbody>


<?php 
$counter = 1;
foreach ($users as $key => $person) {
   ?> 



      <tr>
        <td>  <?php echo $counter ?>  </td>
        <td> <?php echo $person[0] ?>   </td>
        <td> <?php echo $person[1] ?> </td>
        <td> <?php echo $person[2] ?> </td>
      </tr>

      <?php
$counter++; 
}
?>
    </tbody>
  </table>
</body>
</html>