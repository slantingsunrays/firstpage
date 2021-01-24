<?php

session_start();
$userId=$_SESSION["userId"];
$pageId=$_POST["pageId"];


$dsn = "mysql:host=localhost;dbname=firstpage;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword);





   
        $stmt = $pdo->prepare("DELETE FROM `bookmark` WHERE `bookmark`.`userId`=$userId AND `bookmark`.`pageId`= $pageId;"); 
        $stmt->execute();
       
        
          



    
 
?>


