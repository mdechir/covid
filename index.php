<?php
   try{
      $pdo=new PDO("mysql:host=mysql-dechirmathys.alwaysdata.net ;dbname=dechirmathys_virus","229073","TEST123Belddfsd");
      echo "coucou";
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>