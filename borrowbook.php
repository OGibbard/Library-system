<?php
header('Location: librarianpage.php');
try{
    include_once("connection.php");
    print_r($_POST);

    $stmt = $conn->prepare("UPDATE books SET Borrowed = 'True' WHERE books.Title = :Title");
    $stmt->bindParam(':Title', $_POST["Title"]); 
    $stmt->execute();
    }
catch(PDOException $e)
    {
        echo "error".$e->getMessage();
    }
$conn=null;
?>