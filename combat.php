<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
    <title>Combat</title>
</head>
<body> 
    <?

    include "fonction.php"; 

    if($access) {
        echo "BIENVENUE sur CE COMBAT";

    }
    else {
        echo "c'est ouf";
        echo $errorMessage;
    }
    ?>
</body>
</html>