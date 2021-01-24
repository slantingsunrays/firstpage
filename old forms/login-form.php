<?php
include "nav-home.php";  
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/login-form.css"> 
<title></title>
</head>

<body>
<form action="process-login.php" method="POST" class="firstform"> 
    <div> 
    <label>Sign In</label> 
    </div>
    
    <div>
    <input type="text" name="username" placeholder="Enter your username" required/></br>
    <input type="password" name="password" placeholder="Enter your password" required/></br>
    </div>
    
    <div>
    <button type="submit" value="Log in">Log In</button>  
    </div>
    <a href="register-form.php">Don't have an account? Register here!</a>
</form>

</body>

</html>

