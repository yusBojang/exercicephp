<?php

function nombre($a){
 

    if ($a > 0){
        echo "la table de multiplication de ".$a." est:<br>";
        for($i=0 ; $i<=10; $i ++){
            echo  $a." x ". $i." = ". $a * $i."<br>" ;
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


