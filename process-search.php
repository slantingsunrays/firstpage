<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/process-search.css"> 
<title></title>
</head>

<body>

</body>

</html>


<?php
include "nav.php"; 
session_start();
// $userId=$_SESSION["userId"];

$search=$_POST["search"];
 
$dsn = "mysql:host=localhost;dbname=firstpage;charset=utf8mb4";
$dbusername= "root";
$dbpassword=""; 

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt= $pdo->prepare("SELECT * FROM `page` WHERE `tags` LIKE '%$search%';");

$stmt->execute();
?>

<button><a href="search.php" id="searchButton">Go back to search </a></button></br>


<?php
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	echo("<div class='eachPage'>"); 
	echo ("Page Name: ".$row["pageName"]); ?> </br><?php	
	echo("Page Author: ".$row["pageAuthor"]); ?> </br> <?php
	echo("Preview: ".$row["preview"]); ?> </br> <?php
	echo("Tags: ".$row["tags"]);?> </br>
    <a href="view-page.php?pageId=<?php echo($row["pageId"]); ?>" id="readMore">Read More</a><?php
 	echo("</div>"); 
}; ?>
