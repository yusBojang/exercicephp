<?php
session_start();
include_once("function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style13.css">
</head>
<body>
    <div classe="container">
        <form action="controller.php" method="POST">
            <label for="">veuillez saisir votre texte</label><br>
            <textarea name="num1" id="" cols="65" rows="25">

            </textarea><br>
            <input type="submit" value="corriger" name="submit"><br>

            <textarea name="" id="" cols="65" rows="25">
                <?php
                
                if(isset($_SESSION["num"])) {
                    echo $_SESSION["num"];
                }

                ?>

            </textarea>
        </form>

    </div>
</body>
<?php
session_destroy();
?>
</html>