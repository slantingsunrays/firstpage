<?php 
session_start();
include "nav.php";
?> 

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/search.css"> 
<title></title>
</head>

<body>
<form action="process-search.php"  method="POST">
    
<input type="text" name="search" placeholder="Find your story..."/> 
<button type="submit" value="Log in" class="button">Let's go exploring!</button>  

</form>
</body>

</html>