<?php
$sv1 = "192.168.0.31";
$sv2 = "192.168.28.10";
$udb = "blm";
$pdb = "crbjt";
$ndb = "banglamunghos";
        
try{
    
    $pdo = new PDO("mysql:host=$sv1;dbname=$ndb;charset=utf8",$udb,$pdb, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
 catch (PDOException $e){
     echo $e->getMessage();
     
 }
try{
    
    $pdo1 = new PDO("mysql:host=$sv2;dbname=$ndb;charset=utf8",$udb,$pdb, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
 catch (PDOException $e){
     echo $e->getMessage();
     
 }

        

