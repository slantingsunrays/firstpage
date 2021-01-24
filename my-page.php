<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="css/my-page.css"> 
</head>

<body> 




<?php

include('nav.php');

session_start();
$userId=$_SESSION["userId"];

$dsn = "mysql:host=localhost;dbname=firstpage;charset=utf8mb4";
$dbusername= "root";
$dbpassword=""; 


$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("SELECT * FROM  `page` WHERE `page`.`userId` =$userId; ");


$stmt->execute(); 



?>

<div class="parentPage">

<?php
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
	echo("<div class='eachPage'>");    
	echo("<p>");
	?></br><?php	
	echo ("Title: ".$row["pageName"]); ?> </br><?php	
	echo("Author: ".$row["pageAuthor"]); ?> </br> <?php
	echo("Preview: ".$row["preview"]); ?> </br> <?php
	echo("Page Tags: ".$row["tags"]);?> </br>

	
	<button type="submit" class="button">
	<a href="edit-page.php?pageId=<?php echo($row["pageId"]);?>"> Edit </a> 
	</button>
	<button type="submit" class="button">	
	<a href="delete-page.php?pageId=<?php echo($row["pageId"]);?>"> Delete </a> 
	</button>
	<button type="submit" class="button">
	<a href="view-page.php?pageId=<?php echo($row["pageId"]); ?>">Read More</a>
	</button>
	<?php 
	echo("</p>");
	echo("</div>"); 
} ?>
</div> 
<body> 
<html> 