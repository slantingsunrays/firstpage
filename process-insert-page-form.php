<?php
include "nav.php"; 
session_start();
$userId=$_SESSION["userId"];
$pageName = $_POST["pageName"];
$pageAuthor = $_POST["pageAuthor"];
$content = $_POST["content"];
$tags = $_POST["tags"];
$preview=$_POST["preview"];
$userfile=$_FILES['userfile']['name'];


$dsn = "mysql:host=localhost;dbname=firstpage;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 



$stmt = $pdo->prepare("INSERT INTO `page`
	(`pageId`, `pageName`, `pageAuthor`,`preview`, `content`,`tags`,`userfile`,`userId`) 
	VALUES (NULL, '$pageName', '$pageAuthor', '$preview', '$content','$tags','$userfile','$userId');");

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
<p class="message"> You made a page! </p> 
<a href="my-page.php" class="link" >Go back to My Pages</a>
</div>
</body>

</html>
