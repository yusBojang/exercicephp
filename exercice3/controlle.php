<?php
session_start();
include_once("function.php");
if(isset($_POST["submit"])){
    $_SESSION["x"] = rand(1, 20);
    $_SESSION["y"] = rand(1, 20);
    $_SESSION["post"] = $_POST["submit"];
}
header("location:index.php");

