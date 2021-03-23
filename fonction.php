<?php
 $mabase = null;
 try{
    $pdo=new PDO('mysql:host=mysql-dechirmathys.alwaysdata.net;dbname=dechirmathys_virus', '229073', 'TEST123Belddfsd');
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>