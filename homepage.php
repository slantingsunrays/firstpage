<?php 

include "nav-home.php"; 
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/homepage.css"> 
<title></title>
</head>

<body>
<div id="text"> 

At First Page, find your next inspiration, journey or idea…</br>
Create your own first pages, find other stories and discover adventure.
<span id="content"> Let's go exploring!</span> 
 

</div> 
<div id="bookmarkAll">

<div id="image">
<img src="bookmark.svg"  id="bookmark" > 


<p> Welcome to First Page</p> 
<button input="none" class="button" id="button1"> Log in</a></button> 
<button input="none" class="button" id="button2">  Register </a> </button> 
</div>
</div> 

<div  id="logModal">
<form action="process-login.php" method="POST" class="firstform">
    
 <div class="modalContent">   
    
   
    <div> 
    <label>Sign In</label> 
    </div>
    
    <div>
    <input type="text" name="username"  placeholder="Enter your username" required/></br>
    <input type="password" name="password"  placeholder="Enter your password"required /></br>
    </div>
    
    <div>
    <span id="closeButtonLog" style="cursor:pointer">Cancel</span> 
    <button type="submit" value="Log in">Log In</button>  
    </div>

    <a href="register-form.php">Don't have an account? Register here!</a>
</div>
</div> 
</form>


<div id="regModal">
<form action="process-register-form.php" method="POST" class="firstform">
<div class="modalContent">   
    
    
    <div>
    <label>Create your First Page Account</label> 
    </div>

    <div>
     <input type="text" name="username" placeholder="New username"required /> </br>
     <input type="password" name="password" placeholder="New password" required/> </br>  
    </div>

    <div>
    <span id="closeButtonReg" style="cursor:pointer">Cancel</span> 
    <button type="submit" value="Register">Register</button>
    </div> 
    <a href="login-form.php">Have an account? Login here!</a>
    </div>
    </div>
    </form>









</body>

<script> 
// Get the modal
var logModal = document.getElementById("logModal");
var regModal = document.getElementById("regModal");
var text= document.getElementById("text");
// Get the button that opens the modal
var btn1 = document.getElementById("button1");
var btn2 = document.getElementById("button2");
// Get the <span> element that closes the modal
var cancelLog = document.getElementById("closeButtonLog");
var cancelReg = document.getElementById("closeButtonReg");
var bookmark=document.getElementById("bookmarkAll"); 
// When the user clicks the button, open the modal 
btn1.onclick = function() {
  logModal.style.display = "inline";
  text.style.display="none";
  bookmark.style.display="none"; 

}

// When the user clicks on <span> (x), close the modal
cancelLog.onclick = function() {
  logModal.style.display = "none";
  text.style.display="flex";
  bookmark.style.display="inline";
}



// When the user clicks the button, open the modal 
btn2.onclick = function() {
  regModal.style.display = "inline";
  text.style.display="none";
  bookmark.style.display="none"; 

}

// When the user clicks on <span> (x), close the modal
cancelReg.onclick = function() {
  regModal.style.display = "none";
  text.style.display="flex";
  bookmark.style.display="inline"; 
}



</script> 
</html>