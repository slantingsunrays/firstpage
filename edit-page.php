<?php

include "nav.php"; 
//receive GET variables
$pageId = $_GET["pageId"];


//get page record form the database table
$dsn = "mysql:host=localhost;dbname=firstpage;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("SELECT * FROM `page` 
	WHERE `pageId` = $pageId");

$stmt->execute();

 $row = $stmt->fetch(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/edit-page.css"> 
</head>
<body>
<div id="storyForm">
<form action="process-edit-page.php" enctype="multipart/form-data" method="POST">
	<label>Title:</label></br>  
	<input type="text" name="pageName" value="<?php echo($row["pageName"]);?>"/>
	<label>Author:</label></br> 
	<input type="text" name="pageAuthor" value="<?php echo($row["pageAuthor"]);?>"/>
	<label>Preview:</label></br> 
	<textarea name="preview" cols="100" rows="5" value="<?php echo($row["preview"]);?>"></textarea>
	<label>Story:</label></br> 
	<textarea name="content" cols="100" rows="30" value="<?php echo($row["content"]);?>"></textarea>
	<label>Tags:</label></br> 
	<input type="text" name="tags" value="<?php echo($row["tags"]);?>"/>
	<label>Picture:</label></br> 
	<input type="file" name="userfile">
	
	<input type="hidden" name="pageId" value="<?php echo($row["pageId"]);?>">
	</br>
	<button input type="submit" name="update" value="Update" class="button">Update</button>

</form>
</div> 
</body>
</html> 