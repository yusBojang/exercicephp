<?php
session_start();
include_once("function.php");


     $a = rand(1, 20);
     $b = rand(1, 20);

if(isset($_POST["submit"])){
    $per = perm($a,$b);
    header("location:index.php?per1=".$per);
}