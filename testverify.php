<?php


 
    $user=$_POST['username']; 
	$email = $_POST['email'];  
	$ph = $_POST['phone'];
	$q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$q3 = $_POST['q3'];
	
	
	$cr = 0;
	if($q1 == "a1"){
		$cr = $cr + 1;
	}
	
	if($q2 == "a2"){
		$cr = $cr +1;
	}
	
	if($q3 == "a3"){
		$cr = $cr + 1;
	}
	$sr = (string)$cr;

	
  
     $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'quiz') or die("cannot select DB");  
  
	$query = mysqli_query($con,"INSERT into testverify VALUES('".$user."','".$email."','".$ph."','".$q1."','".$q2."','".$q3."','".$sr."')");
	
    

 





?>

<h2 style="text-align:center;">Submited Successfuly<h2>