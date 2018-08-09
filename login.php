<?php
error_reporting(1);
require_once('connection2.php');

$a=$_POST['email'];
$b=$_POST['pass'];
if(isset($_POST['login']))
{
	
    $query="select pass from registration where email= '$a'";
	$get_data=mysqli_query($con,$query);
	$data = mysqli_fetch_assoc($get_data);
	if($data['pass']== "")
	{
		echo "email does not exist";
	}else if($data['pass']==$b)
	{
		echo "login successful";
		header('Location:account.php?a='.$a);
	}
	else{
		echo "invalid password";
	}
}

?>

<html>
<head>
<title>login page</title>
<h1 align="center" style= "background-color:blue; color:white; border:1px solid black;">login page</h1>
<style type="text/css">
body{
	height: 100%; 
	margin: 0;
	background-image:url("img5.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}
</style>
</head>
<body>
<center><form method="POST" action=" " style=" width:500px; height:200px; border :1px solid black; font-size:20px; background-color:lightblue;">

<br><table>
<tr><td>Email  ID:</td><td><input type= "email" name="email" value="" required ></td></tr>
<tr><td>Password:</td><td><input type= "password" name="pass" value= "" id="myInput"  pattern="(?=.\d)(?=.*[a-z])(?=.*[A-Z]){8,0}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>
<td><input type="checkbox" onclick="myFunction()">Show Password</td></tr>
<tr><td><a href="ggk.php">signup</a></td>
<td><input type= "submit" name="login" value= "login">
<a href="forgetpass.php">forget passwprd</a></td></tr>
</table></form>
</center>
  <script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

</body>
</html>
