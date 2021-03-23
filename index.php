<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    try{
        $pdo=new PDO('mysql:host=mysql-dechirmathys.alwaysdata.net;dbname=dechirmathys_virus', '229073', 'TEST123Belddfsd');
        echo "coucou";
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    ?>
    
</body>
</html>
