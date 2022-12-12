<?php

date_default_timezone_set("Europe/Brussels");


function getHello($naam, $achternaam, $sex = "x")
{

    $hour = 16;

    $naam = ucfirst(strtolower($naam));

    $hello = "Goedenacht";
    $sex;


    if ($hour < 6) {
        $hello = "Goeienacht";
    } elseif (($hour > 6) && ($hour < 11)) {
        $hello = "Goeiemorgen";
    } elseif (($hour > 11) && ($hour < 17)) {

        $hello = "Goeiedag";
    } elseif (($hour > 17)) {
        $hello = "Goeieavond";
    }


    $gender = "meneer";
    $gender2 = "mevrouw";
    $gender3 = "";


    if ($sex == "m") {
        return "$hello $gender $achternaam";
    } elseif ($sex == "f") {
        return "$hello $gender2 $achternaam";
    } elseif ($sex == "x") {
        return "$hello $gender3 $achternaam";
    }

    /*
 switch ($sex) {
    case 'f':
        $gender2;
        break;

    case 'm':
        $gender;
        break;
    
    default:
      $gender3;
        break;
 }
   return "$hello $title $name";  */
}



?>