<!doctype html>  
<html>  
<head>  
<title>Login</title>  
<link rel="stylesheet" href="css/new.css">

</head>  
<body>  
     <center><h1>Login for Online Quiz</h1></center>  
   <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>   
<section class="log">

<h3>Login to start Quiz</h3>
<form action="" method="POST">  
Username: <input type="text" name="username"><br />  
Password : <input type="password" name="password"><br />   
<input type="submit" value="Login" name="submit" />  
</form>  
</section>
<?php  

session_start();
if(isset($_POST["submit"])){  
  
if(!empty($_POST['username']) && !empty($_POST['password'])) {  
    $user=$_POST['username'];  
    $pass=$_POST['password'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'quiz') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM register WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
	
		//echo $row['username'];
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
	{echo "Login Successful" ;
		//session_register("user");
		$_SESSION['login_user'] = $user;
		
		header("location: test.php");
         
   
  
}  
}  
}
}  
?>  
</body>  
</html>   