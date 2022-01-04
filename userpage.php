<?php 
session_start();  
if (isset($_SESSION['name']))
{    
    header("Location:login.php"); 
}
if ($_SESSION['role'])==1
{    
    header("Location:librarianpage.php"); 
}

include_once('connection.php')
$stmt = $conn->prepare("SELECT * FROM books"); 
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
{ 
echo($row["Title"].' '.$row["Surname"]."<br>"); 
} 

?> 

<!DOCTYPE html>
<html>
<head>
    
    <title>User page</title>
    
</head>
<body>
</body>
</html>