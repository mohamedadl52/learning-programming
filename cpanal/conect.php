<?php 
 $dsn = "mysql:host=127.0.0.1 ; dbname=Shope";
 $user = "root";
 $pass = "";
 $opstions = array (
 PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" ,
 ) ;
 try {
    $con = new PDO ($dsn , $user ,$pass , $opstions) ;
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION) ;
    echo "you are connectd" ;
 }
 catch (PDOException $e){
    echo "falied to connect" . $e->getMessage();
 }