<!doctype html>  
<html>  
<head>  
<title>Login</title>  
   <link rel="stylesheet" href="css/new.css">
</head>  
<body>  
     <center><h1>Register For Online Quiz</h1></center>  
   <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>  
 
<section class="reg">
<h3>Registeration Form</h3>
<form action="" method="POST">  
<label>Username : <input type="text" name="username"></label></br>
<label>Email       : <input type="text" name="email"></label></br>
<label>Password : <input type="password" name="password"></label></br>
<label>Phone      : <input type="text" name="phone"></label></br>
 
<input type="submit" value="Login" name="submit" />  
</form>  

</section>
<?php  

session_start();
if(isset($_POST["submit"])){  
  
if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['phone'])) {  
    $user=$_POST['username']; 
	$email = $_POST['email'];
    $pass=$_POST['password'];  
	$ph = $_POST['phone'];
  
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'quiz') or die("cannot select DB");  
  
	$query = mysqli_query($con,"INSERT into register VALUES('".$user."','".$email."','".$pass."','".$ph."')");
    echo "success";
}
}   
   
   
?>  
</body>  
</html>   