
<?php
$login= false;
$loginError= false;
    if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		include 'partial/_dbconnect.php';
	
		$email = $_POST["email"];
		$password = $_POST["password"];

	
        $sql = "Select * from signupform where email='$email' AND password='$password'";
	    $result = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($result);
			  if($num==1)
			  {
				  $login = true;
				  session_start();
				  $_SESSION['loggedin'] = true;
				  $_SESSION['email'] = $email;
				  header("location: index.php");
			

			  }
		
		else
		{
			$loginError = "Invalid Credentials";
		}
	}
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <script src="https://kit.fontawesome.com/fff75681f1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<?php
   
	if($loginError)
	{
	echo '	<div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
        <strong>Alert</strong> '.$loginError.'
        </div> ';  
	}
	

?>

<h1 id="logo">Heal&Feel</h1> <br>
<div class="container" id="container">
	
	<div class="form-container sign-up-container">
		<form method="POST" action="signup.php">
			<h1>Create Account</h1>
			<br>
			<span class="spani"> Use your email for registration</span>
			<input type="text" name="susername" placeholder="Name" />
			<input type="email" name="semail" placeholder="Email" />
			<input type="password" name="spassword" placeholder="Password" />
			<input type="password" name="spassword" placeholder="Confirm Password" />
			<button>Sign Up</button>
		</form>
	</div>

	<div class="form-container sign-in-container">
		<form method="POST" action="login.php">
			<h1>Log in</h1><br>
			
			<span class="spani">Use your Details</span>
			<input name="email" type="email" placeholder="Email" />
			<input name="password" type="password" placeholder="Password" />
			
			
			<button type="submit" value="LOGIN">Log In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost"  id="signIn">Log In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Healthy!</h1>
				<p>Enter your personal details and start journey with us</p>
				<a href="signup.php"><button class="ghost"  id="signUp">Sign Up</button></a>
			</div>
		</div>
	</div>
</div>



<script src="login.js"></script>
    
</body>
</html>


