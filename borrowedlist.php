<?php

include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM books WHERE Borrowed='True'"); 
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
{ 
echo($row["Title"].', '.$row["Author"].', '.$row["Genre"].', '.$row["Length"].', '.$row["Publisher"]."<br>"); 
} 

?>