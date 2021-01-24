<?php
include "nav.php";  
?>
<?php

$pageId = $_GET["pageId"];

$dsn = "mysql:host=localhost;dbname=firstpage;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 


$stmt = $pdo->prepare("SELECT * FROM `page` 
	WHERE `pageId` = $pageId");

$stmt->execute();
?>
<div class="eachPage">
<?php
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/edit-page.css"> 
</head>
<body>
<div id="storyForm">
<form action="process-delete-page.php" enctype="multipart/form-data" method="POST">
	<label>Title:</label></br>  
	<?php echo($row["pageName"]);?>
	<label>Author:</label></br> 
	<?php echo($row["pageAuthor"]);?>
	<label>Preview:</label></br> 
	<?php echo($row["preview"]);?>
	<label>Story:</label></br> 
	<?php echo($row["content"]);?>
	<label>Tags:</label></br> 
	<?php echo($row["tags"]);?>
	
	
	<input type="hidden" name="pageId" value="<?php echo($row["pageId"]);?>">
	</br> 
	<button type="submit" class="button"> Delete Page</button>

</form>
</div> 
</body>
</html>

	






