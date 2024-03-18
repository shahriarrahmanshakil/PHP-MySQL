<?php session_start();
  
  if(isset($_POST["btnLogin"])){
	  
	  $username=$_POST["txtUsername"];
	  $password=$_POST["txtPassword"];
	  
    if ($username=="admin" && $password=="123"){ 
			 $_SESSION["sname"]=$username;
       header("location:demo.php");
  } else{ 
    $msg="Username or Password is incorrect!";
  }
	
  }

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
 <?php
   echo isset($msg)?$msg:"";
 ?>
 <form action="#" method="post">
   <div>
    Username<br/>
    <input type="text" name="txtUsername" />
   </div>
   <div>
    Password<br/>
    <input type="password" name="txtPassword" />
   </div>
   <div>
    <input type="submit" value="Log In" name="btnLogin" />
   </div>
 </form>
</body>
</html>