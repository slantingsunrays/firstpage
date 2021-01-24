<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/browse.css"> 


<title></title>

</head>


<body> 



<?php
include("nav.php");
session_start();

$dsn = "mysql:host=localhost;dbname=firstpage;charset=utf8mb4";
$dbusername= "root";
$dbpassword=""; 


$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("SELECT * FROM  `page`; ");


$stmt->execute(); 
?>

<div class="parentPage">

<?php
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
	echo("<p>");
	?>
	
	
	
	<?php
	echo("<div class='eachPage'>"); 
	echo ("Page Name: ".$row["pageName"]); ?> </br><?php	
	echo("Page Author: ".$row["pageAuthor"]); ?> </br> <?php
	echo("Preview: ".$row["preview"]); ?> </br> <?php
	echo("Tags: ".$row["tags"]);?> </br>
	<button type="submit" class="button">
	<a href="view-page.php?pageId=<?php echo($row["pageId"]); ?>">Read More</a>
	</button> 
	
    
	<?php 
	echo("</p>");
	echo("</div>"); 
} ?>

</div>
</body>
</html>