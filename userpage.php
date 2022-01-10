<?php 
session_start();  
if (isset($_SESSION['name']))
{    
    header("Location:login.php"); 
}

?> 

<!DOCTYPE html>
<html>
<head>
    
    <title>User page</title>
<form action="booklist.php">
<input type="submit" value="Click here to see the book list.">
</form>

</head>
<body>
</body>
</html>