<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        include "fonction.php"; 
        if($access) {
            echo "BIENVENUE sur MON SITE";
            echo '<a href="combat.php">vient combatre</a>';
        } 
        else {
            echo "c'est ouf";
            echo $errorMessage;
        }
    ?>
    
</body>
</html>