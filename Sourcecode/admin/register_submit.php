<!DOCTYPE HTML>
<html>
<body>
<?php
 
include("DBconnection.php"); // include the connection object from the DBConnection.php
 
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
	 $inName = $_POST["uname"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
	 $inEmail = $_POST["email"];
	 
	 $inPassword = $_POST["password"];
     $inAadharId = $_POST["aadhar"];
	 //$encryptPassword = password_hash($inPassword, PASSWORD_DEFAULT);
	 
	 $stmt = $db->prepare("INSERT INTO admin_register(uname, email, password, aadhar) VALUES(?, ?, ?, ?)"); //Fetching all the records with input credentials
	 $stmt->bind_param("ssss",$inName, $inEmail,  $inPassword,$inAadharId); //Where s indicates string type. You can use i-integer, d-double
	 $stmt->execute();
	 $result = $stmt->affected_rows;
	 $stmt -> close();
	 $db -> close(); 
	
	if($result > 0)
	 {
        //echo '<script>alert("Registeration Succesful")</script>';
		header("location: RegSuccess.php"); // user will be taken to the success page
	 }
	 else
	 {
		 echo "Oops. Something went wrong. Please try again"; 
		 ?>
		 <a href="register.php">Try Login</a>
		 <?php 
	 }
}
?>
</body> 
</html>

