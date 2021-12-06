<?php
header('Location: librarianpage.php');
try{
    include_once("connection.php");
    array_map("htmlspecialchars", $_POST);
    switch($_POST["role"]){ 
        case "User": 
            $role=0; 
            break; 
        case "Librarian": 
            $role=1; 
            break; 
    }

    $stmt = $conn->prepare("INSERT INTO TblUsers (UserID,Gender,Surname,Forename,Password,Role)VALUES (null,:gender,:surname,:forename,:password,:role)");

    $stmt->bindParam(':forename', $_POST["forename"]); 
    $stmt->bindParam(':surname', $_POST['surname']); 
    $stmt->bindParam(':password', $_POST['passwd']); 
    $stmt->bindParam(':gender', $_POST['gender']); 
    $stmt->bindParam(':role', $role); 
    $stmt->execute();
    }
catch(PDOException $e)
    {
        echo "error".$e->getMessage();
    }
$conn=null;

echo $_POST["gender"]."<br>";
echo $_POST["forename"]."<br>";
echo $_POST["surname"]."<br>";
echo $_POST["passwd"]."<br>";
echo $_POST["role"]."<br>";
print_r($_POST);
?>