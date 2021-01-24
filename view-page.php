<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/view-page.css"> 

<title>View Page</title>
</head>
<body>


<?php
include("nav.php");
session_start();


$userId=$_SESSION["userId"];
$pageId=$_GET["pageId"];

$dsn = "mysql:host=localhost;dbname=firstpage;charset=utf8mb4";
$dbusername= "root";
$dbpassword=""; 


$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("SELECT * FROM  `page` WHERE `pageId`= $pageId");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);     



?>

<p id="likeMessage"></p>
<div id="viewPage"> 

<div id="pageContent">

<input type="hidden" name="pageId" id="pageId" value= "<?php echo ($pageId);?>">
<input type="hidden" name="userId" id="userId" value= "<?php echo ($userId);?>">
<button type="submit" name="addBook" id="addBook">Add to Bookshelf</button> </br> 


<?php 
echo("<p>");
echo ("Title: ".$row["pageName"]); ?> </br><?php	
echo("Author: ".$row["pageAuthor"]); ?> </br> <?php
echo("Preview:".$row["preview"]); ?> </br><?php
echo("Story:".$row["content"]); ?> </br><?php
echo("Tags:".$row["tags"]); ?> 
</div> 
<img src="uploads/<?php echo($row["userfile"]); ?>"   alt="image" id="pageImage"><?php
echo("</p>");
 ?> 

</div>


<body> 

<script>
const form= {
		addBook: document.getElementById('addBook'),
	    userId: document.getElementById('userId'),
		pageId: document.getElementById('pageId')
		
	}; 

form.addBook.addEventListener("click", addFormFunction, false); 


 
function addFormFunction(event){

	event.preventDefault();
	var xhr = new XMLHttpRequest(); 
	
	xhr.onreadystatechange = function(e){     
		console.log(xhr.readyState);  
 
		if(xhr.readyState === 4){    
			console.log(xhr.responseText);// modify or populate html elements based on response.
		    
			
		    //DOM Manipulation
            form.addBook.style.backgroundColor="#2D2626";
            form.addBook.innerHTML="Remove from Bookshelf";
			form.addBook.addEventListener("click", removeFormFunction, false);
			form.addBook.removeEventListener("click", addFormFunction, false); 
            
		} 
	};

	const requestData= `pageId=${form.pageId.value}&userId=${form.userId.value}`;
	
    xhr.open("POST","add-bookmark.php",true); 
	xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
	xhr.send(requestData); 
}



function removeFormFunction(event){

event.preventDefault();
var xhr = new XMLHttpRequest(); 

xhr.onreadystatechange = function(e){     
    console.log(xhr.readyState);  

    if(xhr.readyState === 4){    
        console.log(xhr.responseText);// modify or populate html elements based on response.
        
        form.addBook.style.backgroundColor="#970303";
        form.addBook.innerHTML="Add to Bookshelf";
		form.addBook.removeEventListener("click", removeFormFunction, false);
		form.addBook.addEventListener("click", addFormFunction, false); 
        
    } 
};

const requestData= `pageId=${form.pageId.value}&userId=${form.userId.value}`;

xhr.open("POST","remove-bookmark.php",true); 
xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
xhr.send(requestData); 
}
</script> 

<html> 
