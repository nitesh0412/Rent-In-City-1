<?php
	require_once('dbconfig/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sign.css">
    <title>Document</title>
</head>
<body >
  
    <div class="login-box">
        <h2>Register</h2>
        <hr><br>
        <form method="post">
          <div class="user-box">
            <input type="text" name="name" required="">
            <label> Full-name</label>
          </div>
          <div class="user-box">
            <input type="email" name="email" required >
            <label>E-mail</label>
          </div>
		  <div class="user-box">
            <input type="tel"  name="phone"   >
            <label>Phone</label>
          </div>
		    <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
          </div>
          <div class="user-box">
            <input type="text" name="cpassword" required="">
            <label> Confirm-Password</label>
        </div>
         <button name="register" id="signup_btn" type="submit">Sign Up</button>
        </form>
      </div>
		<?php
			if(isset($_POST['register']))
			{
				//echo '<script type="text/javascript">alert("Jai Bajrang bali")</script>';
				$name= $_POST['name'];
				$email= $_POST['email'];
				$phone= $_POST['phone'];
				$password= $_POST['password'];
				$cpassword= $_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query = "select * from users where email='$email'";
					$query_run = mysqli_query($con,$query);
					if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Email-Id Already exists.. Please try another email-id!")</script>';
						}
						else
						{
							$query = "insert into users values('$name','$email','$phone','$password')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								
								
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
			}	
		?>
</body>
</html>