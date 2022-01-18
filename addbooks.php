<?php
header('Location: librarianpage.php');
try{
    include_once("connection.php");
    print_r($_POST);
    array_map("htmlspecialchars", $_POST);

    $stmt = $conn->prepare("INSERT INTO books (Title,Author,Genre,Length,Publisher,Borrowed)VALUES (:Title,:Author,:Genre,:Length,:Publisher,'False')");
    $stmt->bindParam(':Title', $_POST["Title"]); 
    $stmt->bindParam(':Author', $_POST['Author']);
    $stmt->bindParam(':Genre', $_POST['Genre']);  
    $stmt->bindParam(':Length', $_POST['Length']); 
    $stmt->bindParam(':Publisher', $_POST['Publisher']); 
    $stmt->execute();
    $stmt1 = $conn->prepare("SELECT * FROM books ORDER BY Title");
    $stmt1->execute();
    }
catch(PDOException $e)
    {
        echo "error".$e->getMessage();
    }
$conn=null;
?>