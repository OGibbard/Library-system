<?php 
session_start();
include_once ("connection.php"); 

array_map("htmlspecialchars", $_POST); 

$stmt = $conn->prepare("SELECT * FROM tblusers WHERE surname =:username ;" ); 

$stmt->bindParam(':username', $_POST['Username']); 

$stmt->execute(); 

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 

{  

    if($row['Password']== $_POST['Pword']){ 
        $_SESSION['name']=$row["surname"];
        if($row['Role']==1){
            $_SESSION['role']=1;
            header('Location: librarianpage.php');
        }else{
            $_SESSION['role']=0;
            header('Location: userpage.php');
        }
    }else{ 

 

        header('Location: login.php'); 

    } 

}                                                                                                                                                          
if($_POST['Pword']=="")
{
header('Location: login.php');
}
$conn=null; 

?> 