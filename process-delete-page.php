<?php
include "nav.php"; 
$pageId = $_POST["pageId"];


$dsn = "mysql:host=localhost;dbname=firstpage;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("DELETE FROM `page`
	WHERE `page`.`pageId` = $pageId;");

$stmt->execute();

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/process-register.css"> 
<title></title>
</head>

<body>
<div class="form">
<p class="message">Your page was deleted.</p> </br> 
<a href="my-page.php" class="link">Go back to Your Pages.</a> </br> 
</div>
</body>

</html>
 
