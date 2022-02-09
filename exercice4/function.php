<?php

function perm($a , $b){

    $tmp;
    
    $tmp = $a;
    $a = $b;
    $b = $tmp;

    echo  "<div class='you1'> apres permutation, la valeur de a est: ".$a." et la valeur de b est:".$b."</div><br>";

}