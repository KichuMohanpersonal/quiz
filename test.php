	<?php
$con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'quiz') or die("cannot select DB");  
  
  session_start();
  
  $usr = $_SESSION['login_user'];
  
  $qry= mysqli_query($con,"SELECT * FROM register WHERE username = '$usr' ");

  $row = mysqli_fetch_array($qry);
  









?>

<html>
    
    <head>
    
        <link rel="stylesheet" href="css/new.css">
      
    </head>
<body>
    
    <div class="name">

<h1> Name:    <?php  echo $row['username']; ?>  </h1> 
<h6> Name:    <?php  echo $row['email']; ?>  </h6> 
    
    </div>
   <section class="ins">
   <h4>Instruction</h4>
	<p>1. The Site will be live from 9am-10am.You need to start test at 9am because the test will stop at 10am</p>
	<p>2. You can submit any number of times but only first submition will be recorded</p>
   </section> 
 

<form action="testverify.php" method="POST">

<input type="hidden" name="username" value="<?php echo $row['username']; ?>">
<input type="hidden" name="email" value="<?php echo $row['email'];?>">
<input type="hidden" name="phone" value="<?php echo $row['phone'];?>">

<div class="question">
<p>question 1</p>
  <input type="radio" name="q1" value="a1">
  <label >Ans1</label>
  <input type="radio" name="q1" value="a2">
  <label >Ans2</label> 
  <input type="radio" name="q1" value="a3">
  <label >Ans3</label> 
  <input type="radio"name="q1" value="a4">
  <label >Ans4</label> 
  </div>
  
  <div class="question">
<p>question 2</p>
  <input type="radio" name="q2" value="a1">
  <label >Ans1</label>
  <input type="radio" name="q2" value="a2">
  <label >Ans2</label> 
  <input type="radio" name="q2" value="a3">
  <label >Ans3</label> 
  <input type="radio"name="q2" value="a4">
  <label >Ans4</label> 
  </div>


<div class="question">
<p>question 3</p>
  <input type="radio" name="q3" value="a1">
  <label >Ans1</label>
  <input type="radio" name="q3" value="a2">
  <label >Ans2</label> 
  <input type="radio" name="q3" value="a3">
  <label >Ans3</label> 
  <input type="radio"name="q3" value="a4">
  <label >Ans4</label> 
  </div>
<input class="sub" type="submit">


</form>
    

</body>
</html>