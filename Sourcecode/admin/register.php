
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<!-- Using external stylesheet to make the registration form look attractive -->
<link rel = "stylesheet" type = "text/css" href="style1.css"/>
<script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>


<!-- Javascript validation for user inputs -->
<script>
function validate()
{ 
var uname = document.getElementById("aname").value;
var email = document.getElementById("aemail").value;

var password = document.getElementById("pass").value;
var aadhar = document.getElementById("aadharid").value; 

var aadharTwelve=/^\d{12}$/;
var aadharSixteen=/^\d{16}$/;

if (uname==null || uname=="")
{ 
alert("Name can't be blank"); 
return false; 
}
else if (email==null || email=="")
{ 
alert("Email can't be blank"); 
return false; 
}

else if(password.length&amp;lt;4)
{ 
alert("Password must be at least 4 characters long."); 
return false; 
} 

else if(aadhar.match(aadharTwelve))
{
    return true;
}
else if(aadhar.match(aadharSixteen))
{
    return true;
}
else{
alert("Invalid AadharId");
return false;
}
}

</script> 
</head>
<body>
 
<!-- Make a note that the method type used is post, action page is register.php and validate() function will get called on submit -->
 <div style="text-align:center"><h1>Register</h1></div>
 <br>
<form name="register" method="post" action="register_submit.php" onsubmit="validate()" >
 <!-- Not advised to use table within the form to enter user details -->
<table align="center" >
<tr>
<td>Name</td>
<td><input type="text" name="uname" id="aname" /></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" id="aemail" /></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="password" id="pass"/></td>
</tr>
<tr>
<td>AadharId</td>
<td><input type="text" name="aadhar" id="aadharid" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Register"></input><input
type="reset" value="Reset"></input></td>
</tr>
</table>
<div class="text-center">Already have an account? <a href="login.php">Sign In</a></div>			
</form>


</body>
</html>
