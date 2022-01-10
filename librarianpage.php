<?php 
session_start();  
if (isset($_SESSION['name']))
{    
    header("Location:login.php"); 
}
if ($_SESSION['role']==0)
{    
    header("Location:userpage.php"); 
}
?> 

<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
<form action="booklist.php">
<input type="submit" value="Click here to see the book list.">
</form>


<br>


<form action="addbooks.php" method = "post">
  Title:<input type="text" name="Title"><br>
  Author:<input type="text" name="Author"><br>
  Genre:<select name="Genre">
		<option value="comic">Comedy</option>
		<option value="computer_science">Computer Science</option>
    <option value="data_science">Data Science</option>
    <option value="economics">Economics</option>
    <option value="fiction">Fiction</option>
    <option value="history">History</option>
    <option value="mathematics">Maths</option>
    <option value="nonfiction">Non-Fiction</option>
    <option value="philosophy">Philosophy</option>
    <option value="psychology">Psychology</option>
    <option value="science">Science</option>
    <option value="signal_processing">Signal Processing</option>
  </select>
  <br>
  Length:<input type="text" name="Length"><br>
  Publisher:<input type="text" name="Publisher"><br>
  <br>
  <input type="submit" value="Add Book">
</form>


<br>
<br>


<form action="addusers.php" method = "post">
  First name:<input type="text" name="forename"><br>
  Last name:<input type="text" name="surname"><br>
  Password:<input type="password" name="passwd"><br>
  <!--Creates a drop down list-->
  Gender:<select name="gender">
		<option value="M">Male</option>
		<option value="F">Female</option>
	</select>
  <br>
  <!--Next 3 lines create a radio button which we can use to select the user role-->
  <input type="radio" name="role" value="User" checked>User<br>
  <input type="radio" name="role" value="Librarian">Librarian<br>
  <input type="submit" value="Add User">

  
</form>
</body>
</html>