
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/register-form.css"> 
</head>
<body>
<div class="modal" id="modal">
<form action="process-register-form.php" method="POST" class="firstform">
    
    
    <div class="close">
    <span class="closeButton">Close Window</span> 
    </div>
    <div>
    <label>Create your First Page Account</label> 
    </div>

    <div>
     <input type="text" name="username" placeholder="New username" /> </br>
     <input type="password" name="password" placeholder="New password" /> </br>  
    </div>

    <div>
    <button type="submit" value="Register">Register</button>
    </div> 
    <a href="login-form.php">Have an account? Login here!</a>
</form>
</div> 
</body>
</html>