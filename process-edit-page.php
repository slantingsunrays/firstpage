<?php

include "nav.php"; 
//receive POST data from edit form
$pageName = $_POST["pageName"];
$pageAuthor = $_POST["pageAuthor"];
$pageId=$_POST["pageId"];
$content=$_POST["content"];
$preview=$_POST["preview"];
$tags=$_POST["tags"]; 
$userfile=$_FILES["userfile"]["name"];
//update page record (row) with the edit form data
$dsn = "mysql:host=localhost;dbname=firstpage;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("UPDATE `page` 
	SET `pageName` = '$pageName', 
	`pageAuthor` = '$pageAuthor',
	`preview` = '$preview',
	`content` = '$content',
	`tags` = '$tags',
	`userfile`= '$userfile'
    
	WHERE `page`.`pageId` = $pageId;");


$uploaddir = "uploads/";
$uploadfile = $uploaddir . basename($_FILES["userfile"]["name"], time() . "_{$userfile}");
move_uploaded_file($_FILES["userfile"]["tmp_name"], $uploadfile);
   
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
<p class="message">You successfully updated your page.</p> </br>
<a href="my-page.php" class="link">Go back to Your Pages</a>
</div>
</body>

</html>
</br>
