<?php
include "nav-home.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/process-register.css"> 
<title></title>
</head>

<body>
<div id="form"> 
<p class="message">You successfully registered!</p></br> 
<a href="login-form.php" class="link">Log in now.</a>
</div> 
</body>

</html>

<?php
//process-insert-person-form.php
 
//receive input
$username = $_POST["username"];
$password = $_POST["password"];



$dsn = "mysql:host=localhost;dbname=firstpage;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("INSERT INTO `user` 
	(`userId`, `username`, `password`) 
	VALUES (NULL, '$username', '$password');");//insert a new user record into the person table

$stmt->execute();


?>




