<?php
	session_start();
	require_once('dbconfig/config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <title>Document</title>
</head>
<body >
  
    <div class="login-box">
        <h2>Login</h2>
        <hr><br>
        <form action="dashboard.php.php" method="post">
          <div class="user-box">
            <input type="email" name="email" required="">
            <label>E-mail</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
          </div>
          <a href="#">
          <button  class="btn" name="register" id="signup_btn" type="submit">Sign Up</button>
		  <span></span>
            <span></span>
            <span></span>
            <span></span>
          
</a> </form>
      
      </div>
	  
	  <?php
			if(isset($_POST['login']))
			{
				@$email=$_POST['email'];
				@$password=$_POST['password'];
				$query = "select * from users where email='$email' and password='$password' ";
				$query_run = mysqli_query($con,$query);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['email'] = $email;
					$_SESSION['password'] = $password;
					
					header( "Location: index.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
		?>
	  
</body>
</html>