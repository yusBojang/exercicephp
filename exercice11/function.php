<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function nbrPremier($number) {
    $cpt = 0;
    $i=1;
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $cpt++;
        }
    }


    if ($cpt == 2) {
        return true;
    }else{
        return false;
    }
 
    
}



function saisiEntier($ent){
    for($i=0;$i<$ent;$i++){
        if($ent[$i] >= 0 && $ent[$i] <= 9 ){
            return true;
        }else{
            return false;
        }
    }
}



