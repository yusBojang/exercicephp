<?php

function som($a , $b){
    return $a + $b ;
}


function diff($a , $b){
   return $a - $b;
}

 function prod($a , $b){
     return $a * $b;
 }

 function mod($a , $b){
    return $a % $b;
}

function div($a , $b){
    if ($b != 0) {
    return $a / $b;
  }else
    echo "impossible";
 }

 function car($a){
    return $a * $a;
}


