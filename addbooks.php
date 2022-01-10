<?php
header('Location: librarianpage.php');
try{
    include_once("connection.php");
    array_map("htmlspecialchars", $_POST);

    $stmt = $conn->prepare("INSERT INTO books(Title,Author,Genre,Length,Publisher)VALUES (:Title,:Author,:Genre,:Length,:Publisher)");
    $stmt->bindParam(':Title', $_POST["Title"]); 
    $stmt->bindParam(':Author', $_POST['Author']);
    $stmt->bindParam(':Genre', $Genre);  
    $stmt->bindParam(':Length', $_POST['Length']); 
    $stmt->bindParam(':Publisher', $_POST['Publisher']); 
    $stmt->execute();
    }
catch(PDOException $e)
    {
        echo "error".$e->getMessage();
    }
$conn=null;

echo $_POST["Title"]."<br>";
echo $_POST["Author"]."<br>";
echo $_POST["Genre"]."<br>";
echo $_POST["Length"]."<br>";
echo $_POST["Publisher"]."<br>";
print_r($_POST);
?>