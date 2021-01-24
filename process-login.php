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

</body>

</html>

<?php
session_start();
//process-login.php
//receive post variables
$username = $_POST["username"];
$password = $_POST["password"];




//check the username and password against the database records

$dsn = "mysql:host=localhost;dbname=firstpage;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("SELECT * FROM `user`
   WHERE `username` = '$username' 
   AND `password` = '$password'");


$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);


if($row){ 
   
   
   $_SESSION["userId"]=$row["userId"]; 
   $_SESSION["usertype"]=$row["usertype"];
   echo ($_SESSION['userId']);
   echo ($_SESSION['usertype']);
   
   if($_SESSION["usertype"]=="member"){
       header("Location: search.php");
      
   }
}

else{?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/process-register.css">
<title></title>
</head>

<body>
   
<div class="form">
<p class="message"> Incorrect username and password </p> 
<a href="homepage.php" class="link" >Please log in again. </a>
</div>
</body>

</html>


<?php
}
?>