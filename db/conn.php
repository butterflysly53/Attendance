<?php
  //Remote Database Connection
 $host="remotemysql.com";
 $db="8lyPvqriEp";
 $user="8lyPvqriEp";
 $pass="82bERMMJpb";
 $charset="utf8mb4";
 
 $dsn="mysql:host=$host;dbname=$db;charset=$charset";
 
 try{
    $pdo=new PDO($dsn,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e){
    // echo "<h1 class='text-danger'>No dataBase Found</h1>";
     throw new PDOException($e->getMessage());
 }
 require_once "crud.php";
 require_once "user.php";
 $crud=new crud($pdo);
 $user=new user($pdo);
 $user->insertUser("admin","password");
?>
