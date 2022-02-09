<?php

function equation($a, $b, $c){

    echo "lequation".$a."x2 + ".$b."x +".$c."<br>";

    $detla = $b * $b - (4*$a*$c);

    if($detla < 0 ){
        return "pas de solution";
    }


    if($detla == 0 ){
        return "l'equation admet une racine".-$b/(2*$a);
    }

    if($detla > 0 ){

        $r1 = -($b-sqrt($detla))/(2*$a);
        $r2 = -($b+sqrt($detla))/(2*$a);
        return "l'equation admet deux racine: ".$r1." et ".$r2;

        }


}

//saisie dun entierr
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
