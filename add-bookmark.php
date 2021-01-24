<?php

session_start();
$userId=$_SESSION["userId"];
$pageId=$_POST["pageId"];


$dsn = "mysql:host=localhost;dbname=firstpage;charset=utf8mb4";
$dbusername= "root";
$dbpassword=""; 

$pdo = new PDO($dsn, $dbusername, $dbpassword); 



$articleNotFound = True;

$stmt= $pdo->prepare("SELECT `pageId` FROM `bookmark` WHERE `userId`= $userId;");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    if($row["pageId"]==$pageId){ 
        echo ("You already bookmarked this article!");
        $articleNotFound = False;
       

    }    
}

if ($articleNotFound == True)
{
    $stmt= $pdo->prepare("INSERT INTO `bookmark` (`bookmarkId`, `userId`, `pageId`) VALUES (NULL,'$userId', '$pageId');");
    $stmt->execute();
    echo ("You bookmarked this article!");  



}
 


      
 



     





?>




