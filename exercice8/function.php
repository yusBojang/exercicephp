<?php

function nombre($a){

    echo "la valeur saisie est ".$a."<br>";
 

    if ($a > 0){
        echo "les valeur compris entre 1 et ".$a." sont <br>";
        for($i=1 ; $i<=$a; $i ++){
            echo "<li>". $i." </li>";
        }
    }
  
 
}



function longueur($chaine)
{
    $j=0;
    while (isset($chaine[$j])) {
        $j++;
    }
    return $j;
}

function saisiEntier($ent){
    for($i=0; $i< longueur($ent);$i++){

        if(!($ent[$i] >= 0 && $ent[$i] <= 9) ){
            return false;
        }
    }
    return true;
}

