<?php
//insert-person-form.php
session_start();
include "nav.php"; 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/insert-page.css"> 
</head>
<body>
<p id="formName"> </p> 
<a href id="create"></a> 

<div id="storyForm">

<form action="process-insert-page-form.php" enctype="multipart/form-data" method="POST">
<label>Title:</label></br>     
<input type="text" name="pageName" id="title" placeholder="Title for your story..." required/> </br>
<label>Author:</label></br>    
<input type="text" name="pageAuthor" id="author"placeholder="Author of the story.."required/> </br>  
<label>Preview:</label> </br>      
<textarea name="preview" cols="100" rows="5" id="preview" placeholder="Preview of your story..." required></textarea> </br> 
<label>Story:</label></br>
<textarea name="content" cols="100" rows="30" id="content" placeholder="Your story..."required></textarea> </br> 
<label>Tags:</label> </br>
<input type="text" name="tags" id="tags" placeholder="Tags for your story..."required></textarea> </br> 
 
    
    

    <div id="upload">
    <label> Choose a picture:</label></br> 
    <input type="file" id="userfile" name="userfile">  </br>
    <button type="submit" id= "page-submit" class="button">Publish this page</button>
    <div>
</form>
</div>

</body>

 

</html>

 

