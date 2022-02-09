<?php
session_start();
include_once("function.php");


     $x1 = rand(1, 20);
     $y1 = rand(1, 20);
     $x2 = rand(1, 20);
     $y2 = rand(1, 20);

if(isset($_POST["submit"])){
    $dist = dista($x1,$y1,$x2,$y2);
    header("location:index.php?dis=".$dist);

}


 

