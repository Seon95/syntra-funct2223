<?php

$teller = 0;
// $seconden = $_GET["s"];

function berekenSom($a, $b) {

    return ($a + $b);

}

function doIets($a) {
$a = strtoupper($a);
$a = $a . " - ik heb iets gedaan";

    return $a;

}


function addOne($teller) {

    $teller++;

return $teller;

}

function showFutureTime($extratijd = 0) {

    $currentTime = time() + $extratijd;

    $str = date("H\ui\ms\s" , $currentTime);
return $str ; 
}
/*of deze gebruiken $currenttime =  strtotime("6 hours") 
function showFutureTime($extratijd) {

    $currentTime = strtotime + ($extratijd hours);

return $currentTime ; 
*/


echo ucfirst ("dit is een tekst"); /* hoofdletter */

echo "som van 5+3 is ". berekenSom(5,3)  .  "<br />";
echo berekenSom (10,1) . "<br />";
echo doIets("dit is mijn tekst") .  "<br />";

echo addOne($teller) .  "<br />";

echo showFutureTime(5);

?>


